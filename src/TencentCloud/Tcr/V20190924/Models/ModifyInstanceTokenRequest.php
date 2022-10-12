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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceToken request structure.
 *
 * @method string getTokenId() Obtain ID of the long-term access credential of the instance
 * @method void setTokenId(string $TokenId) Set ID of the long-term access credential of the instance
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method boolean getEnable() Obtain Whether to enable the long-term access credential of the instance
 * @method void setEnable(boolean $Enable) Set Whether to enable the long-term access credential of the instance
 * @method string getDesc() Obtain Access credential description
 * @method void setDesc(string $Desc) Set Access credential description
 * @method integer getModifyFlag() Obtain Valid values: 1: Modify the description; 2: Enable/Disable. Default value: 2.
 * @method void setModifyFlag(integer $ModifyFlag) Set Valid values: 1: Modify the description; 2: Enable/Disable. Default value: 2.
 */
class ModifyInstanceTokenRequest extends AbstractModel
{
    /**
     * @var string ID of the long-term access credential of the instance
     */
    public $TokenId;

    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var boolean Whether to enable the long-term access credential of the instance
     */
    public $Enable;

    /**
     * @var string Access credential description
     */
    public $Desc;

    /**
     * @var integer Valid values: 1: Modify the description; 2: Enable/Disable. Default value: 2.
     */
    public $ModifyFlag;

    /**
     * @param string $TokenId ID of the long-term access credential of the instance
     * @param string $RegistryId Instance ID
     * @param boolean $Enable Whether to enable the long-term access credential of the instance
     * @param string $Desc Access credential description
     * @param integer $ModifyFlag Valid values: 1: Modify the description; 2: Enable/Disable. Default value: 2.
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
        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ModifyFlag",$param) and $param["ModifyFlag"] !== null) {
            $this->ModifyFlag = $param["ModifyFlag"];
        }
    }
}
