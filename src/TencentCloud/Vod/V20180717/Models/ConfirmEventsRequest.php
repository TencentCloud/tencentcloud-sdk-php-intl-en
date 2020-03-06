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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getEventHandles() Obtain Event handler, i.e., the `EventSet. EventHandle` field in the output parameters of the [event notification pulling](/document/product/266/33433) API.
Array length limit: 16.
 * @method void setEventHandles(array $EventHandles) Set Event handler, i.e., the `EventSet. EventHandle` field in the output parameters of the [event notification pulling](/document/product/266/33433) API.
Array length limit: 16.
 * @method string getExtInfo() Obtain Reserved field for special purposes.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field for special purposes.
 * @method integer getSubAppId() Obtain [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
 */

/**
 *ConfirmEvents request structure.
 */
class ConfirmEventsRequest extends AbstractModel
{
    /**
     * @var array Event handler, i.e., the `EventSet. EventHandle` field in the output parameters of the [event notification pulling](/document/product/266/33433) API.
Array length limit: 16.
     */
    public $EventHandles;

    /**
     * @var string Reserved field for special purposes.
     */
    public $ExtInfo;

    /**
     * @var integer [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
     */
    public $SubAppId;
    /**
     * @param array $EventHandles Event handler, i.e., the `EventSet. EventHandle` field in the output parameters of the [event notification pulling](/document/product/266/33433) API.
Array length limit: 16.
     * @param string $ExtInfo Reserved field for special purposes.
     * @param integer $SubAppId [Subapplication](/document/product/266/14574) ID in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
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
        if (array_key_exists("EventHandles",$param) and $param["EventHandles"] !== null) {
            $this->EventHandles = $param["EventHandles"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
