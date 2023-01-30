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
 * Information of an allowed reverse shell
 *
 * @method string getId() Obtain Allowed item ID
 * @method void setId(string $Id) Set Allowed item ID
 * @method integer getImageCount() Obtain Number of images
 * @method void setImageCount(integer $ImageCount) Set Number of images
 * @method string getProcessName() Obtain Connection process name
 * @method void setProcessName(string $ProcessName) Set Connection process name
 * @method string getDstIp() Obtain Destination address IP
 * @method void setDstIp(string $DstIp) Set Destination address IP
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getDstPort() Obtain Target port
 * @method void setDstPort(string $DstPort) Set Target port
 * @method boolean getIsGlobal() Obtain Whether it is allowed globally. `true`: Yes.
 * @method void setIsGlobal(boolean $IsGlobal) Set Whether it is allowed globally. `true`: Yes.
 * @method array getImageIds() Obtain Array of image IDs. An empty array indicates all.
 * @method void setImageIds(array $ImageIds) Set Array of image IDs. An empty array indicates all.
 */
class ReverseShellWhiteListBaseInfo extends AbstractModel
{
    /**
     * @var string Allowed item ID
     */
    public $Id;

    /**
     * @var integer Number of images
     */
    public $ImageCount;

    /**
     * @var string Connection process name
     */
    public $ProcessName;

    /**
     * @var string Destination address IP
     */
    public $DstIp;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Target port
     */
    public $DstPort;

    /**
     * @var boolean Whether it is allowed globally. `true`: Yes.
     */
    public $IsGlobal;

    /**
     * @var array Array of image IDs. An empty array indicates all.
     */
    public $ImageIds;

    /**
     * @param string $Id Allowed item ID
     * @param integer $ImageCount Number of images
     * @param string $ProcessName Connection process name
     * @param string $DstIp Destination address IP
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update time
     * @param string $DstPort Target port
     * @param boolean $IsGlobal Whether it is allowed globally. `true`: Yes.
     * @param array $ImageIds Array of image IDs. An empty array indicates all.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }
    }
}
