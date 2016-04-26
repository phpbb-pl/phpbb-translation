#!/usr/bin/env bash
#
# ------------------------------------------------------------------------------
# DESCRIPTION:
# ------------------------------------------------------------------------------
# Build two phpBB packages from sources:
# - standalone package (only translation files)
# - full package (phpBB files + translation)
#
# ------------------------------------------------------------------------------
# USAGE:
# ------------------------------------------------------------------------------
# Script takes two arguments in the following order:
# 1) phpBB version used in building process
# 2) translation version from repository (tag name)
#
# Example:
# ./build.sh 3.1.8 3.1.8-1

PHPBB_VERSION="$1"
TRANSLATION_VERSION="$2"

if [[ -z "${PHPBB_VERSION}" ]]; then
    echo "Please specify phpBB version used for building packages (eg. 3.1.8)"
    exit
fi

if [[ -z "${TRANSLATION_VERSION}" ]]; then
    echo "Please specify translation output packages version (eg. 3.1.8-1)"
    exit
fi

# Output packages filenames
STANDALONE_PACKAGE_FILENAME="pl-${TRANSLATION_VERSION}"
FULL_PACKAGE_FILENAME="phpBB-${PHPBB_VERSION}-pl"

CURRENT_DIRECTORY=$(dirname "$0")
BUILD_DIRECTORY="${CURRENT_DIRECTORY}/build-${TRANSLATION_VERSION}"
SOURCE_PHPBB_FILENAME="phpBB-${PHPBB_VERSION}.zip"

# Create build directories
mkdir -p "${BUILD_DIRECTORY}/tmp"
cd "${BUILD_DIRECTORY}/tmp"

# Download given version of phpBB
wget https://www.phpbb.com/files/release/"${SOURCE_PHPBB_FILENAME}"

# Clone desired version of translation
git clone git://github.com/phpbb-pl/phpbb-translation.git --branch="${TRANSLATION_VERSION}" --depth=1

# Create standalone translation package
cd "${BUILD_DIRECTORY}/tmp/phpbb-translation"
mv phpBB pl
zip -r "${STANDALONE_PACKAGE_FILENAME}.zip" pl
mv "${STANDALONE_PACKAGE_FILENAME}.zip" "${BUILD_DIRECTORY}"

# Create full package: phpBB + translation
cd "${BUILD_DIRECTORY}/tmp"
cp -r phpbb-translation/pl phpBB3
zip -ur "${SOURCE_PHPBB_FILENAME}" phpBB3
cp "${SOURCE_PHPBB_FILENAME}" "${BUILD_DIRECTORY}/${FULL_PACKAGE_FILENAME}.zip"

# Clean after building (remove temporary files)
cd "${BUILD_DIRECTORY}"
rm -rf tmp
