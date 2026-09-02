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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * One viewing angle in the MultiViewImages array in the multi-perspective image-to-3D scenario.
 *
 * @method string getViewType() Obtain <p>View type</p><p>Enumeration values:</p><ul><li>front: Front view (required)</li><li>back: Back view</li><li>left: Left view</li><li>right: Right view</li><li>top: Top view</li><li>bottom: Bottom view</li><li>left_front: Left front 45°</li><li>right_front: Right front 45°</li></ul><p>MultiViewImages array length ≥ 2; must contain the front view; the same ViewType cannot be duplicated; each item must provide ViewImageUrl</p>
 * @method void setViewType(string $ViewType) Set <p>View type</p><p>Enumeration values:</p><ul><li>front: Front view (required)</li><li>back: Back view</li><li>left: Left view</li><li>right: Right view</li><li>top: Top view</li><li>bottom: Bottom view</li><li>left_front: Left front 45°</li><li>right_front: Right front 45°</li></ul><p>MultiViewImages array length ≥ 2; must contain the front view; the same ViewType cannot be duplicated; each item must provide ViewImageUrl</p>
 * @method string getViewImageUrl() Obtain <p>Image URL (http/https)</p>
 * @method void setViewImageUrl(string $ViewImageUrl) Set <p>Image URL (http/https)</p>
 */
class ViewImage extends AbstractModel
{
    /**
     * @var string <p>View type</p><p>Enumeration values:</p><ul><li>front: Front view (required)</li><li>back: Back view</li><li>left: Left view</li><li>right: Right view</li><li>top: Top view</li><li>bottom: Bottom view</li><li>left_front: Left front 45°</li><li>right_front: Right front 45°</li></ul><p>MultiViewImages array length ≥ 2; must contain the front view; the same ViewType cannot be duplicated; each item must provide ViewImageUrl</p>
     */
    public $ViewType;

    /**
     * @var string <p>Image URL (http/https)</p>
     */
    public $ViewImageUrl;

    /**
     * @param string $ViewType <p>View type</p><p>Enumeration values:</p><ul><li>front: Front view (required)</li><li>back: Back view</li><li>left: Left view</li><li>right: Right view</li><li>top: Top view</li><li>bottom: Bottom view</li><li>left_front: Left front 45°</li><li>right_front: Right front 45°</li></ul><p>MultiViewImages array length ≥ 2; must contain the front view; the same ViewType cannot be duplicated; each item must provide ViewImageUrl</p>
     * @param string $ViewImageUrl <p>Image URL (http/https)</p>
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
        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }

        if (array_key_exists("ViewImageUrl",$param) and $param["ViewImageUrl"] !== null) {
            $this->ViewImageUrl = $param["ViewImageUrl"];
        }
    }
}
