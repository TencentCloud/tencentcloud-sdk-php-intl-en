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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataEnginesScaleDetail request structure.
 *
 * @method array getDataEngineNames() Obtain Engine name list
 * @method void setDataEngineNames(array $DataEngineNames) Set Engine name list
 * @method string getStartTime() Obtain Start time, and the format is yyyy-MM-dd HH:mm:ss. It can query the records within one month at most.
 * @method void setStartTime(string $StartTime) Set Start time, and the format is yyyy-MM-dd HH:mm:ss. It can query the records within one month at most.
 * @method string getEndTime() Obtain End time, and the format is yyyy-MM-dd HH:mm:ss. It can query the records within one month at most.
 * @method void setEndTime(string $EndTime) Set End time, and the format is yyyy-MM-dd HH:mm:ss. It can query the records within one month at most.
 */
class DescribeDataEnginesScaleDetailRequest extends AbstractModel
{
    /**
     * @var array Engine name list
     */
    public $DataEngineNames;

    /**
     * @var string Start time, and the format is yyyy-MM-dd HH:mm:ss. It can query the records within one month at most.
     */
    public $StartTime;

    /**
     * @var string End time, and the format is yyyy-MM-dd HH:mm:ss. It can query the records within one month at most.
     */
    public $EndTime;

    /**
     * @param array $DataEngineNames Engine name list
     * @param string $StartTime Start time, and the format is yyyy-MM-dd HH:mm:ss. It can query the records within one month at most.
     * @param string $EndTime End time, and the format is yyyy-MM-dd HH:mm:ss. It can query the records within one month at most.
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
        if (array_key_exists("DataEngineNames",$param) and $param["DataEngineNames"] !== null) {
            $this->DataEngineNames = $param["DataEngineNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
