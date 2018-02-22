# Seolyzer Plugin

[Seolyzer](https://seolyzer.io/) integration.

The **Seolyzer** Plugin is for [Grav CMS](http://github.com/getgrav/grav).
This plugin wrap the installation of Seolyzer in your Grav website using the PHP require method.

## Installation

Installing the Seolyzer plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install seolyzer

This will install the Seolyzer plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/seolyzer`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `seolyzer`. You can find these files on [GitHub](https://github.com/basile-trujillo/grav-plugin-seolyzer) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/seolyzer
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/seolyzer/seolyzer.yaml` to `user/config/plugins/seolyzer.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
key: xxxxxxxxxxxxxxx
```

Then in your Seolyzer account, you just need to download the `seolyzer-xxxxxxxxxxxxxxx.php` file and put it in `user/data/seolyzer`in your Grav project.

## To Do

- [ ] Unit tests

