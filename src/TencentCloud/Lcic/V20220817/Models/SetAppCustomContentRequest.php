<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * SetAppCustomContent request structure.
 *
 * @method array getCustomContent() Obtain Custom content
 * @method void setCustomContent(array $CustomContent) Set Custom content
 * @method integer getSdkAppId() Obtain Application ID
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID
 */
class SetAppCustomContentRequest extends AbstractModel
{
    /**
     * @var array Custom content
     */
    public $CustomContent;

    /**
     * @var integer Application ID
     */
    public $SdkAppId;

    /**
     * @param array $CustomContent Custom content
     * @param integer $SdkAppId Application ID
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
        if (array_key_exists("CustomContent",$param) and $param["CustomContent"] !== null) {
            $this->CustomContent = [];
            foreach ($param["CustomContent"] as $key => $value){
                $obj = new AppCustomContent();
                $obj->deserialize($value);
                array_push($this->CustomContent, $obj);
            }
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
