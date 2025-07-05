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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAppCustomContent request structure.
 *
 * @method integer getSdkAppId() Obtain The application ID.
 * @method void setSdkAppId(integer $SdkAppId) Set The application ID.
 * @method array getScenes() Obtain The custom elements (for which a scene has been configured) to delete. If this is empty, all custom elements will be deleted.
 * @method void setScenes(array $Scenes) Set The custom elements (for which a scene has been configured) to delete. If this is empty, all custom elements will be deleted.
 */
class DeleteAppCustomContentRequest extends AbstractModel
{
    /**
     * @var integer The application ID.
     */
    public $SdkAppId;

    /**
     * @var array The custom elements (for which a scene has been configured) to delete. If this is empty, all custom elements will be deleted.
     */
    public $Scenes;

    /**
     * @param integer $SdkAppId The application ID.
     * @param array $Scenes The custom elements (for which a scene has been configured) to delete. If this is empty, all custom elements will be deleted.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }
    }
}
