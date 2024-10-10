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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchElasticMode request structure.
 *
 * @method string getEdition() Obtain Version, can only be sparta-waf, clb-waf, or cdn-waf
 * @method void setEdition(string $Edition) Set Version, can only be sparta-waf, clb-waf, or cdn-waf
 * @method integer getMode() Obtain 0 indicates Off; 1 indicates On
 * @method void setMode(integer $Mode) Set 0 indicates Off; 1 indicates On
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 */
class SwitchElasticModeRequest extends AbstractModel
{
    /**
     * @var string Version, can only be sparta-waf, clb-waf, or cdn-waf
     */
    public $Edition;

    /**
     * @var integer 0 indicates Off; 1 indicates On
     */
    public $Mode;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @param string $Edition Version, can only be sparta-waf, clb-waf, or cdn-waf
     * @param integer $Mode 0 indicates Off; 1 indicates On
     * @param string $InstanceID Instance ID
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
        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
