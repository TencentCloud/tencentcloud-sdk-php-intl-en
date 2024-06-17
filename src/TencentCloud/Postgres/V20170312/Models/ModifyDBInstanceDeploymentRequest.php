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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceDeployment request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method array getDBNodeSet() Obtain Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the returned value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method void setDBNodeSet(array $DBNodeSet) Set Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the returned value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method integer getSwitchTag() Obtain Switch time after instance configurations are modified.
<li>0: Switch immediately</li>
<li>1: Switch at specified time</li>
<li>2: Switch during maintenance time window</li>
Default value: 0
 * @method void setSwitchTag(integer $SwitchTag) Set Switch time after instance configurations are modified.
<li>0: Switch immediately</li>
<li>1: Switch at specified time</li>
<li>2: Switch during maintenance time window</li>
Default value: 0
 * @method string getSwitchStartTime() Obtain Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is 0 or 2, this parameter becomes invalid.
 * @method void setSwitchStartTime(string $SwitchStartTime) Set Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is 0 or 2, this parameter becomes invalid.
 * @method string getSwitchEndTime() Obtain Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is 0 or 2, this parameter becomes invalid.
 * @method void setSwitchEndTime(string $SwitchEndTime) Set Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is 0 or 2, this parameter becomes invalid.
 */
class ModifyDBInstanceDeploymentRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var array Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the returned value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     */
    public $DBNodeSet;

    /**
     * @var integer Switch time after instance configurations are modified.
<li>0: Switch immediately</li>
<li>1: Switch at specified time</li>
<li>2: Switch during maintenance time window</li>
Default value: 0
     */
    public $SwitchTag;

    /**
     * @var string Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is 0 or 2, this parameter becomes invalid.
     */
    public $SwitchStartTime;

    /**
     * @var string Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is 0 or 2, this parameter becomes invalid.
     */
    public $SwitchEndTime;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param array $DBNodeSet Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the returned value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     * @param integer $SwitchTag Switch time after instance configurations are modified.
<li>0: Switch immediately</li>
<li>1: Switch at specified time</li>
<li>2: Switch during maintenance time window</li>
Default value: 0
     * @param string $SwitchStartTime Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is 0 or 2, this parameter becomes invalid.
     * @param string $SwitchEndTime Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is 0 or 2, this parameter becomes invalid.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }
    }
}
