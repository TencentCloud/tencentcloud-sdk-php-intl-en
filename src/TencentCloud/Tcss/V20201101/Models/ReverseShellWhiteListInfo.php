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
 * @method string getDstIp() Obtain Target IP
 * @method void setDstIp(string $DstIp) Set Target IP
 * @method string getDstPort() Obtain Target port
 * @method void setDstPort(string $DstPort) Set Target port
 * @method string getProcessName() Obtain Target process
 * @method void setProcessName(string $ProcessName) Set Target process
 * @method array getImageIds() Obtain Array of image IDs. An empty array indicates all.
 * @method void setImageIds(array $ImageIds) Set Array of image IDs. An empty array indicates all.
 * @method string getId() Obtain Allowed item ID, which is empty if the item is newly created.
 * @method void setId(string $Id) Set Allowed item ID, which is empty if the item is newly created.
 */
class ReverseShellWhiteListInfo extends AbstractModel
{
    /**
     * @var string Target IP
     */
    public $DstIp;

    /**
     * @var string Target port
     */
    public $DstPort;

    /**
     * @var string Target process
     */
    public $ProcessName;

    /**
     * @var array Array of image IDs. An empty array indicates all.
     */
    public $ImageIds;

    /**
     * @var string Allowed item ID, which is empty if the item is newly created.
     */
    public $Id;

    /**
     * @param string $DstIp Target IP
     * @param string $DstPort Target port
     * @param string $ProcessName Target process
     * @param array $ImageIds Array of image IDs. An empty array indicates all.
     * @param string $Id Allowed item ID, which is empty if the item is newly created.
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
        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
