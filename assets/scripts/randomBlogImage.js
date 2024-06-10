const fs = require('fs');
const path = require('path');

// Get an array of all PNG files in the sprite folder
const files = fs.readdirSync(spriteFolder);
const pngFiles = files.filter(file => path.extname(file) === '.png');

if (pngFiles.length > 0) {
    const randomIndex = Math.floor(Math.random() * pngFiles.length);
    const randomFile = pngFiles[randomIndex];
    imgElement.src = spriteFolder + randomFile;
} else {
    // Handle the case where there are no PNG files in the directory
    console.error('No PNG files found in', spriteFolder);
}