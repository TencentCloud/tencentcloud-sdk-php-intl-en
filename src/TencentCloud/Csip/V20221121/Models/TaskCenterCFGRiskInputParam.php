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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced configuration risk scan configuration
 *
 * @method string getItemId() Obtain Check item ID
 * @method void setItemId(string $ItemId) Set Check item ID
 * @method integer getEnable() Obtain Whether to enable. `0`: no, `1`: yes.
 * @method void setEnable(integer $Enable) Set Whether to enable. `0`: no, `1`: yes.
 * @method string getResourceType() Obtain Resource type
 * @method void setResourceType(string $ResourceType) Set Resource type
 */
class TaskCenterCFGRiskInputParam extends AbstractModel
{
    /**
     * @var string Check item ID
     */
    public $ItemId;

    /**
     * @var integer Whether to enable. `0`: no, `1`: yes.
     */
    public $Enable;

    /**
     * @var string Resource type
     */
    public $ResourceType;

    /**
     * @param string $ItemId Check item ID
     * @param integer $Enable Whether to enable. `0`: no, `1`: yes.
     * @param string $ResourceType Resource type
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
