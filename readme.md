# WordPress Playground Blueprints

Blueprints for deploying MuchoRed WordPress projects to [WordPress Playground](https://playground.wordpress.net/).

## Overview

This repository contains blueprint configurations that enable instant browser-based previews of WordPress themes. Each blueprint installs a theme from a GitHub release and configures the Playground environment.

## Blueprints

| Project | Blueprint |
|---------|-----------|
| 4Boys Capital | `blueprints/4boys-capital.json` |
| ACU | `blueprints/acu.json` |
| Martinair | `blueprints/martinair.json` |
| Sterling CS | `blueprints/sterling-cs.json` |

## Usage

### Quick Preview

Open any blueprint directly in WordPress Playground:

```
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/gema-ap/wordpress-sample/main/blueprints/<project-name>.json
```

### Blueprint Structure

Each blueprint:
1. Hides the admin bar for clean previews
2. Installs and activates the project theme from GitHub releases

## Adding a New Blueprint

1. Create `blueprints/<project-name>.json`
2. Upload theme as `theme.zip` to a GitHub release tagged `<project-name>`
3. Reference the release URL in the blueprint

## Resources

- [WordPress Playground](https://playground.wordpress.net/)
- [Blueprint Schema](https://playground.wordpress.net/blueprint-schema.json)
- [Blueprint Documentation](https://wordpress.github.io/wordpress-playground/)
