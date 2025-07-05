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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWhiteboardApplicationConfig request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method array getConfigs() Obtain Task-related configurations of the whiteboard application.
 * @method void setConfigs(array $Configs) Set Task-related configurations of the whiteboard application.
 */
class ModifyWhiteboardApplicationConfigRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var array Task-related configurations of the whiteboard application.
     */
    public $Configs;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param array $Configs Task-related configurations of the whiteboard application.
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

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new WhiteboardApplicationConfig();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }
    }
}
