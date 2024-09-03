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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the backend node supporting hot/cold data layering
 *
 * @method string getHost() Obtain Field: Host
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHost(string $Host) Set Field: Host
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataUsedCapacity() Obtain Field: DataUsedCapacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataUsedCapacity(string $DataUsedCapacity) Set Field: DataUsedCapacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalCapacity() Obtain Field: TotalCapacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCapacity(string $TotalCapacity) Set Field: TotalCapacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemoteUsedCapacity() Obtain Field: RemoteUsedCapacity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemoteUsedCapacity(string $RemoteUsedCapacity) Set Field: RemoteUsedCapacity
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CoolDownBackend extends AbstractModel
{
    /**
     * @var string Field: Host
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Host;

    /**
     * @var string Field: DataUsedCapacity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataUsedCapacity;

    /**
     * @var string Field: TotalCapacity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCapacity;

    /**
     * @var string Field: RemoteUsedCapacity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemoteUsedCapacity;

    /**
     * @param string $Host Field: Host
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataUsedCapacity Field: DataUsedCapacity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalCapacity Field: TotalCapacity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RemoteUsedCapacity Field: RemoteUsedCapacity
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DataUsedCapacity",$param) and $param["DataUsedCapacity"] !== null) {
            $this->DataUsedCapacity = $param["DataUsedCapacity"];
        }

        if (array_key_exists("TotalCapacity",$param) and $param["TotalCapacity"] !== null) {
            $this->TotalCapacity = $param["TotalCapacity"];
        }

        if (array_key_exists("RemoteUsedCapacity",$param) and $param["RemoteUsedCapacity"] !== null) {
            $this->RemoteUsedCapacity = $param["RemoteUsedCapacity"];
        }
    }
}
