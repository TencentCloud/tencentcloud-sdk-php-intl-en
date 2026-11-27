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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataRetrieval request structure.
 *
 * @method string getFileSystemId() Obtain <p>File system instance ID, which can be obtained through the DescribeCfsFileSystems API. Example value: cfs-xxxxxx</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system instance ID, which can be obtained through the DescribeCfsFileSystems API. Example value: cfs-xxxxxx</p>
 * @method string getDataRetrievalName() Obtain <p>Data retrieval name. Example value: DataDive</p>
 * @method void setDataRetrievalName(string $DataRetrievalName) Set <p>Data retrieval name. Example value: DataDive</p>
 * @method string getCompoundCondition() Obtain <p>Aggregated retrieval condition. Example value: from entries|where size &gt;4096</p>
 * @method void setCompoundCondition(string $CompoundCondition) Set <p>Aggregated retrieval condition. Example value: from entries|where size &gt;4096</p>
 * @method string getQueryCondition() Obtain <p>List retrieval condition.</p>
 * @method void setQueryCondition(string $QueryCondition) Set <p>List retrieval condition.</p>
 * @method string getDayOfMonth() Obtain <p>Monthly data retrieval. Valid values: 1–31. The retrieval will be automatically created on the specified day of each month. For example, 1 indicates the 1st day of a month. You must specify either this parameter or DayOfWeek. Example value: 1</p>
 * @method void setDayOfMonth(string $DayOfMonth) Set <p>Monthly data retrieval. Valid values: 1–31. The retrieval will be automatically created on the specified day of each month. For example, 1 indicates the 1st day of a month. You must specify either this parameter or DayOfWeek. Example value: 1</p>
 * @method string getDayOfWeek() Obtain <p>Day of the week for data retrieval repetition. Valid values: 1–7. 1 indicates Monday and 7 indicates Sunday. You must specify either this parameter or DayOfMonth. Example value: 2,3</p>
 * @method void setDayOfWeek(string $DayOfWeek) Set <p>Day of the week for data retrieval repetition. Valid values: 1–7. 1 indicates Monday and 7 indicates Sunday. You must specify either this parameter or DayOfMonth. Example value: 2,3</p>
 * @method string getHour() Obtain <p>Hour of the day for repetition. Valid values: 0–23. Example value: 1,3,5</p>
 * @method void setHour(string $Hour) Set <p>Hour of the day for repetition. Valid values: 0–23. Example value: 1,3,5</p>
 */
class CreateDataRetrievalRequest extends AbstractModel
{
    /**
     * @var string <p>File system instance ID, which can be obtained through the DescribeCfsFileSystems API. Example value: cfs-xxxxxx</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Data retrieval name. Example value: DataDive</p>
     */
    public $DataRetrievalName;

    /**
     * @var string <p>Aggregated retrieval condition. Example value: from entries|where size &gt;4096</p>
     */
    public $CompoundCondition;

    /**
     * @var string <p>List retrieval condition.</p>
     */
    public $QueryCondition;

    /**
     * @var string <p>Monthly data retrieval. Valid values: 1–31. The retrieval will be automatically created on the specified day of each month. For example, 1 indicates the 1st day of a month. You must specify either this parameter or DayOfWeek. Example value: 1</p>
     */
    public $DayOfMonth;

    /**
     * @var string <p>Day of the week for data retrieval repetition. Valid values: 1–7. 1 indicates Monday and 7 indicates Sunday. You must specify either this parameter or DayOfMonth. Example value: 2,3</p>
     */
    public $DayOfWeek;

    /**
     * @var string <p>Hour of the day for repetition. Valid values: 0–23. Example value: 1,3,5</p>
     */
    public $Hour;

    /**
     * @param string $FileSystemId <p>File system instance ID, which can be obtained through the DescribeCfsFileSystems API. Example value: cfs-xxxxxx</p>
     * @param string $DataRetrievalName <p>Data retrieval name. Example value: DataDive</p>
     * @param string $CompoundCondition <p>Aggregated retrieval condition. Example value: from entries|where size &gt;4096</p>
     * @param string $QueryCondition <p>List retrieval condition.</p>
     * @param string $DayOfMonth <p>Monthly data retrieval. Valid values: 1–31. The retrieval will be automatically created on the specified day of each month. For example, 1 indicates the 1st day of a month. You must specify either this parameter or DayOfWeek. Example value: 1</p>
     * @param string $DayOfWeek <p>Day of the week for data retrieval repetition. Valid values: 1–7. 1 indicates Monday and 7 indicates Sunday. You must specify either this parameter or DayOfMonth. Example value: 2,3</p>
     * @param string $Hour <p>Hour of the day for repetition. Valid values: 0–23. Example value: 1,3,5</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("DataRetrievalName",$param) and $param["DataRetrievalName"] !== null) {
            $this->DataRetrievalName = $param["DataRetrievalName"];
        }

        if (array_key_exists("CompoundCondition",$param) and $param["CompoundCondition"] !== null) {
            $this->CompoundCondition = $param["CompoundCondition"];
        }

        if (array_key_exists("QueryCondition",$param) and $param["QueryCondition"] !== null) {
            $this->QueryCondition = $param["QueryCondition"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }
    }
}
