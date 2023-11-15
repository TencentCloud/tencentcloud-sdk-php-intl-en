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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanTaskList response structure.
 *
 * @method integer getTotalCount() Obtain Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getData() Obtain List of scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set List of scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getUINList() Obtain List of account UINs
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setUINList(array $UINList) Set List of account UINs
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getTaskModeList() Obtain List of task modes
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskModeList(array $TaskModeList) Set List of task modes
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeScanTaskListResponse extends AbstractModel
{
    /**
     * @var integer Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var array List of scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var array List of account UINs
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $UINList;

    /**
     * @var array List of task modes
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskModeList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of entries
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Data List of scan tasks
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $UINList List of account UINs
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $TaskModeList List of task modes
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ScanTaskInfoList();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("UINList",$param) and $param["UINList"] !== null) {
            $this->UINList = $param["UINList"];
        }

        if (array_key_exists("TaskModeList",$param) and $param["TaskModeList"] !== null) {
            $this->TaskModeList = [];
            foreach ($param["TaskModeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->TaskModeList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
