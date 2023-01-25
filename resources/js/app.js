import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;
window.Vapor = require('laravel-vapor');

Alpine.plugin(focus);

Alpine.start();
