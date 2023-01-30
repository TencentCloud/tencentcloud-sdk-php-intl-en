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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whether to enable the compliance standard
 *
 * @method integer getStandardId() Obtain Compliance standard ID
 * @method void setStandardId(integer $StandardId) Set Compliance standard ID
 * @method boolean getEnable() Obtain Whether to enable the compliance standard
 * @method void setEnable(boolean $Enable) Set Whether to enable the compliance standard
 */
class ComplianceBenchmarkStandardEnable extends AbstractModel
{
    /**
     * @var integer Compliance standard ID
     */
    public $StandardId;

    /**
     * @var boolean Whether to enable the compliance standard
     */
    public $Enable;

    /**
     * @param integer $StandardId Compliance standard ID
     * @param boolean $Enable Whether to enable the compliance standard
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
        if (array_key_exists("StandardId",$param) and $param["StandardId"] !== null) {
            $this->StandardId = $param["StandardId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
