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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Channel Linear Assembly Program Aggregation Alarm Information
 *
 * @method string getProgramId() Obtain Program ID.
 * @method void setProgramId(string $ProgramId) Set Program ID.
 * @method string getProgramName() Obtain Program name.
 * @method void setProgramName(string $ProgramName) Set Program name.
 * @method string getCategory() Obtain Alarm classification.
 * @method void setCategory(string $Category) Set Alarm classification.
 * @method integer getCount() Obtain The number of occurrences
 * @method void setCount(integer $Count) Set The number of occurrences
 * @method integer getLastModifiedTime() Obtain Update time.
 * @method void setLastModifiedTime(integer $LastModifiedTime) Set Update time.
 */
class ProgramAlertCounts extends AbstractModel
{
    /**
     * @var string Program ID.
     */
    public $ProgramId;

    /**
     * @var string Program name.
     */
    public $ProgramName;

    /**
     * @var string Alarm classification.
     */
    public $Category;

    /**
     * @var integer The number of occurrences
     */
    public $Count;

    /**
     * @var integer Update time.
     */
    public $LastModifiedTime;

    /**
     * @param string $ProgramId Program ID.
     * @param string $ProgramName Program name.
     * @param string $Category Alarm classification.
     * @param integer $Count The number of occurrences
     * @param integer $LastModifiedTime Update time.
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
        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }
    }
}
