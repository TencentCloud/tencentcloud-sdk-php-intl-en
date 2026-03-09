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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListProcessLineage request structure.
 *
 * @method string getProcessId() Obtain Unique task ID.
 * @method void setProcessId(string $ProcessId) Set Unique task ID.
 * @method string getProcessType() Obtain TASK type //scheduling tasks SCHEDULE_TASK, //INTEGRATION tasks INTEGRATION_TASK, //THIRD-party reporting THIRD_REPORT, //DATA modeling TABLE_MODEL, //MODEL create metrics MODEL_METRIC, //atomic metrics create derived metrics METRIC_METRIC, //DATA SERVICE DATA_SERVICE.
 * @method void setProcessType(string $ProcessType) Set TASK type //scheduling tasks SCHEDULE_TASK, //INTEGRATION tasks INTEGRATION_TASK, //THIRD-party reporting THIRD_REPORT, //DATA modeling TABLE_MODEL, //MODEL create metrics MODEL_METRIC, //atomic metrics create derived metrics METRIC_METRIC, //DATA SERVICE DATA_SERVICE.
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Pagination size.
 * @method void setPageSize(integer $PageSize) Set Pagination size.
 * @method string getPlatform() Obtain Source: WEDATA|THIRD default WEDATA.
 * @method void setPlatform(string $Platform) Set Source: WEDATA|THIRD default WEDATA.
 */
class ListProcessLineageRequest extends AbstractModel
{
    /**
     * @var string Unique task ID.
     */
    public $ProcessId;

    /**
     * @var string TASK type //scheduling tasks SCHEDULE_TASK, //INTEGRATION tasks INTEGRATION_TASK, //THIRD-party reporting THIRD_REPORT, //DATA modeling TABLE_MODEL, //MODEL create metrics MODEL_METRIC, //atomic metrics create derived metrics METRIC_METRIC, //DATA SERVICE DATA_SERVICE.
     */
    public $ProcessType;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Pagination size.
     */
    public $PageSize;

    /**
     * @var string Source: WEDATA|THIRD default WEDATA.
     */
    public $Platform;

    /**
     * @param string $ProcessId Unique task ID.
     * @param string $ProcessType TASK type //scheduling tasks SCHEDULE_TASK, //INTEGRATION tasks INTEGRATION_TASK, //THIRD-party reporting THIRD_REPORT, //DATA modeling TABLE_MODEL, //MODEL create metrics MODEL_METRIC, //atomic metrics create derived metrics METRIC_METRIC, //DATA SERVICE DATA_SERVICE.
     * @param integer $PageNumber Page number
     * @param integer $PageSize Pagination size.
     * @param string $Platform Source: WEDATA|THIRD default WEDATA.
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
        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ProcessType",$param) and $param["ProcessType"] !== null) {
            $this->ProcessType = $param["ProcessType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
