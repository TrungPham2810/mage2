/*eslint-disable */
/* jscs:disable */
define(["Magento_PageBuilder/js/config", "Magento_PageBuilder/js/utils/image", "Magento_PageBuilder/js/utils/object", "Magento_PageBuilder/js/utils/url"], function (_config, _image, _object, _url) {
    /**
     * Copyright © Magento, Inc. All rights reserved.
     * See COPYING.txt for license details.
     */

    /**
     * @api
     */
    var Src = /*#__PURE__*/function () {
        "use strict";

        function Src() {}

        var _proto = Src.prototype;

        /**
         * Convert value to internal format
         *
         * @param value string
         * @param {string} name
         * @param {DataObject} data
         * @returns {string | object}
         */
        _proto.fromDom = function fromDom(value, name, data) {
            if (!value) {
                return "";
            }
            var enableLazyload = (0, _object.get)(data, 'enable_lazyload');
            var dataSrc = (0, _object.get)(data, 'data-src');
            if (enableLazyload == 'true' && dataSrc) {
                value = dataSrc;
            }
            return (0, _image.decodeUrl)(value);
        }
        /**
         * Convert value to knockout format
         *
         * @param {string} name
         * @param {DataObject} data
         * @returns {string}
         */
        ;

        _proto.toDom = function toDom(name, data) {
            var value = (0, _object.get)(data, name);

            if (value[0] === undefined || value[0].url === undefined) {
                return "";
            }

            var imageUrl = value[0].url;
            var mediaUrl = (0, _url.convertUrlToPathIfOtherUrlIsOnlyAPath)(_config.getConfig("media_url"), imageUrl);
            var mediaPath = imageUrl.split(mediaUrl);
            var enableLazyload = (0, _object.get)(data, 'enable_lazyload');
            if (enableLazyload == 'true') {
                return "{{view url='images/px.gif'}}"
            }
            return "{{media url=" + mediaPath[1] + "}}";
        };

        return Src;
    }();

    return Src;
});
//# sourceMappingURL=src.js.map
