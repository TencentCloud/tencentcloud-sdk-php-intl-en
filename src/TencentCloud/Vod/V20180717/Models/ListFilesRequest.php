<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListFiles request structure.
 *
 * @method integer getSubAppId() Obtain VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.
 * @method void setSubAppId(integer $SubAppId) Set VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.
 * @method string getPrefix() Obtain Object key prefix matching, limited to object keys whose names contain the specified prefix in response.
 * @method void setPrefix(string $Prefix) Set Object key prefix matching, limited to object keys whose names contain the specified prefix in response.
 * @method string getDelimiter() Obtain A character separator used for grouping object keys. All object keys with the same part between the prefix or the start (if no prefix is specified) and the first delimiter are grouped as a prefix node under CommonPrefixes. Grouped object keys no longer appear in the subsequent object list.
 * @method void setDelimiter(string $Delimiter) Set A character separator used for grouping object keys. All object keys with the same part between the prefix or the start (if no prefix is specified) and the first delimiter are grouped as a prefix node under CommonPrefixes. Grouped object keys no longer appear in the subsequent object list.
 * @method integer getMaxKeys() Obtain ys  Maximum number of entries returned at a time. Default value: 100. Minimum: 1. Maximum: 100.
 * @method void setMaxKeys(integer $MaxKeys) Set ys  Maximum number of entries returned at a time. Default value: 100. Minimum: 1. Maximum: 100.
 * @method string getMarker() Obtain Starting object key marker
 * @method void setMarker(string $Marker) Set Starting object key marker
 * @method array getCategories() Obtain File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li>
 * @method void setCategories(array $Categories) Set File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li>
 */
class ListFilesRequest extends AbstractModel
{
    /**
     * @var integer VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.
     */
    public $SubAppId;

    /**
     * @var string Object key prefix matching, limited to object keys whose names contain the specified prefix in response.
     */
    public $Prefix;

    /**
     * @var string A character separator used for grouping object keys. All object keys with the same part between the prefix or the start (if no prefix is specified) and the first delimiter are grouped as a prefix node under CommonPrefixes. Grouped object keys no longer appear in the subsequent object list.
     */
    public $Delimiter;

    /**
     * @var integer ys  Maximum number of entries returned at a time. Default value: 100. Minimum: 1. Maximum: 100.
     */
    public $MaxKeys;

    /**
     * @var string Starting object key marker
     */
    public $Marker;

    /**
     * @var array File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li>
     */
    public $Categories;

    /**
     * @param integer $SubAppId VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID.
     * @param string $Prefix Object key prefix matching, limited to object keys whose names contain the specified prefix in response.
     * @param string $Delimiter A character separator used for grouping object keys. All object keys with the same part between the prefix or the start (if no prefix is specified) and the first delimiter are grouped as a prefix node under CommonPrefixes. Grouped object keys no longer appear in the subsequent object list.
     * @param integer $MaxKeys ys  Maximum number of entries returned at a time. Default value: 100. Minimum: 1. Maximum: 100.
     * @param string $Marker Starting object key marker
     * @param array $Categories File type. Match any element in the collection: <li>Video: video file</li> <li>Audio: audio file</li> <li>Image: image file</li>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("MaxKeys",$param) and $param["MaxKeys"] !== null) {
            $this->MaxKeys = $param["MaxKeys"];
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = $param["Categories"];
        }
    }
}
