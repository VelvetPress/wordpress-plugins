# velvetpress-plugins

Open-source WordPress plugins published through [VelvetPress](https://velvetpress.dev) — push to `main` and connected WordPress sites receive the update through the native wp-admin update system.

## Plugins

| Plugin | Description | Path |
|--------|-------------|------|
| VP Starter Plugin | Minimal plugin scaffold with a Settings page placeholder | [`vp-starter-plugin/`](vp-starter-plugin/) |

## Local development

Each plugin is a standard WordPress plugin. To work on one locally, symlink or copy the plugin directory into your WordPress install's `wp-content/plugins/`:

```bash
ln -s "$(pwd)/vp-starter-plugin" /path/to/wp-content/plugins/vp-starter-plugin
```

## Publishing a release

Releases are triggered by a push to `main` after bumping the plugin's `Version:` header in its main PHP file. The VelvetPress backend picks up the webhook and publishes the new ZIP.

See [Publishing a plugin or theme](https://velvetpress.dev/docs/publishing-a-plugin-or-theme) for the full release flow.

## Where's the VelvetPress client plugin?

The **VelvetPress client plugin** (the one that handles site registration, polling, and updates on customer sites) lives in the [main VelvetPress repo](https://github.com/zackrylangford/velvetpress) under `plugins/velvetpress/`, alongside the backend and dashboard it talks to. This repo is for **example/starter plugins** that customers can fork as their own products.
