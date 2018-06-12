# PlayerLink Core

PlayerLink Core is a simple, stripped-down version of PlayerLink Online, designed to be quickly-deployed and used at 
tournaments to quickly-disseminate pairings. It is the spiritual-successor to the original PlayerLink.

PlayerLink Core requires [RTools](http://www.bradleyjx.net).

## Requirements

- Web server with File Uploading and mod_rewrite (or equivalent) enabled.
- PHP 5.6+ or PHP 7.0+

## Installation

This package is self-contained - you should be able to be run with zero-configuration, once you place it in a
web-accessible location.

## Configuration

All relevant configuration to the site can be made from 'application\config\website.php' This includes the 
password for accessing the upload page, which should be modified from it's default before using this in a tournament.

## License

This project is licensed under the MIT License.

This project is written on top of the [Mini3 Framework](https://github.com/panique/mini3).

## Documentation

#### Uploading 

To upload a new tournament round:

- Connect to the tournament in RTools.
- Choose to export/create a WER or WLTR PlayerLink File.
- Go to the /admin/ page on PlayerLink Core.
- Enter in your password. (from "Configuration" earlier)
- Choose either the EPICUpload.txt or PlayerLinkUpload.txt file that was just created from RTools.
- Upload the file.

That should be it!

## Contribute

I'm new with GitHub, so feel free, and I'll figure out how to do the rest :)

## Changelog

**June 12, 2018**

- Initial Release

## PlayerLink Online

Do you run larger or more complicated tournaments, or want tools like online registration, decklist submussion,
and digital displays? Check out [PlayerLink Online](https://blog.playerlink.online).