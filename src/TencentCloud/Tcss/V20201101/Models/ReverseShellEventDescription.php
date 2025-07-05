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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of the container reverse shell event at runtime
 *
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getSolution() Obtain Solution
 * @method void setSolution(string $Solution) Set Solution
 * @method string getRemark() Obtain Event remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Event remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDstAddress() Obtain Destination address
 * @method void setDstAddress(string $DstAddress) Set Destination address
 * @method string getOperationTime() Obtain Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperationTime(string $OperationTime) Set Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ReverseShellEventDescription extends AbstractModel
{
    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Solution
     */
    public $Solution;

    /**
     * @var string Event remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Destination address
     */
    public $DstAddress;

    /**
     * @var string Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperationTime;

    /**
     * @param string $Description Description
     * @param string $Solution Solution
     * @param string $Remark Event remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DstAddress Destination address
     * @param string $OperationTime Last processing time of the event
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DstAddress",$param) and $param["DstAddress"] !== null) {
            $this->DstAddress = $param["DstAddress"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }
    }
}
