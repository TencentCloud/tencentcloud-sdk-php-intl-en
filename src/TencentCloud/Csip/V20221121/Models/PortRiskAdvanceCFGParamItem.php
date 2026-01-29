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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Port Risk Advanced Configuration Item
 *
 * @method string getPortSets() Obtain Port Collection, separated by commas.
 * @method void setPortSets(string $PortSets) Set Port Collection, separated by commas.
 * @method integer getCheckType() Obtain Detection Item Type. 0-System-Defined; 1-User-Defined.
 * @method void setCheckType(integer $CheckType) Set Detection Item Type. 0-System-Defined; 1-User-Defined.
 * @method string getDetail() Obtain Detection item description
 * @method void setDetail(string $Detail) Set Detection item description
 * @method integer getEnable() Obtain Enable/Disable. 1-Enable; 0-Disable.
 * @method void setEnable(integer $Enable) Set Enable/Disable. 1-Enable; 0-Disable.
 */
class PortRiskAdvanceCFGParamItem extends AbstractModel
{
    /**
     * @var string Port Collection, separated by commas.
     */
    public $PortSets;

    /**
     * @var integer Detection Item Type. 0-System-Defined; 1-User-Defined.
     */
    public $CheckType;

    /**
     * @var string Detection item description
     */
    public $Detail;

    /**
     * @var integer Enable/Disable. 1-Enable; 0-Disable.
     */
    public $Enable;

    /**
     * @param string $PortSets Port Collection, separated by commas.
     * @param integer $CheckType Detection Item Type. 0-System-Defined; 1-User-Defined.
     * @param string $Detail Detection item description
     * @param integer $Enable Enable/Disable. 1-Enable; 0-Disable.
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
        if (array_key_exists("PortSets",$param) and $param["PortSets"] !== null) {
            $this->PortSets = $param["PortSets"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
