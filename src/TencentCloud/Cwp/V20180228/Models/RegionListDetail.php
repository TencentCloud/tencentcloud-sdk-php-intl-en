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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the region list
 *
 * @method string getMachineType() Obtain Machine type
CVM, Tencent Cloud Virtual Machine
LH, TencentCloud Lighthouse
ECM, Tencent Cloud Edge Computing Machine
BM, Tencent BM 1.0
Other, Other servers (non-Tencent Cloud)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineType(string $MachineType) Set Machine type
CVM, Tencent Cloud Virtual Machine
LH, TencentCloud Lighthouse
ECM, Tencent Cloud Edge Computing Machine
BM, Tencent BM 1.0
Other, Other servers (non-Tencent Cloud)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCloudFrom() Obtain 0 Tencent Cloud
1 IDC
2 Alibaba Cloud
3 Huawei Cloud
4 Amazon
5 Microsoft
6 Google
7 Oracle
8 Digital Ocean
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudFrom(integer $CloudFrom) Set 0 Tencent Cloud
1 IDC
2 Alibaba Cloud
3 Huawei Cloud
4 Amazon
5 Microsoft
6 Google
7 Oracle
8 Digital Ocean
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRegionList() Obtain List of regions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionList(array $RegionList) Set List of regions
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RegionListDetail extends AbstractModel
{
    /**
     * @var string Machine type
CVM, Tencent Cloud Virtual Machine
LH, TencentCloud Lighthouse
ECM, Tencent Cloud Edge Computing Machine
BM, Tencent BM 1.0
Other, Other servers (non-Tencent Cloud)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineType;

    /**
     * @var integer 0 Tencent Cloud
1 IDC
2 Alibaba Cloud
3 Huawei Cloud
4 Amazon
5 Microsoft
6 Google
7 Oracle
8 Digital Ocean
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudFrom;

    /**
     * @var array List of regions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionList;

    /**
     * @param string $MachineType Machine type
CVM, Tencent Cloud Virtual Machine
LH, TencentCloud Lighthouse
ECM, Tencent Cloud Edge Computing Machine
BM, Tencent BM 1.0
Other, Other servers (non-Tencent Cloud)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CloudFrom 0 Tencent Cloud
1 IDC
2 Alibaba Cloud
3 Huawei Cloud
4 Amazon
5 Microsoft
6 Google
7 Oracle
8 Digital Ocean
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RegionList List of regions
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("CloudFrom",$param) and $param["CloudFrom"] !== null) {
            $this->CloudFrom = $param["CloudFrom"];
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
            }
        }
    }
}
