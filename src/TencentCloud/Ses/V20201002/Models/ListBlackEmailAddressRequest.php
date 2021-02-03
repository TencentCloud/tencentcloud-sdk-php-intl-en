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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListBlackEmailAddress request structure.
 *
 * @method string getStartDate() Obtain Start date in the format of `YYYY-MM-DD`
 * @method void setStartDate(string $StartDate) Set Start date in the format of `YYYY-MM-DD`
 * @method string getEndDate() Obtain End date in the format of `YYYY-MM-DD`
 * @method void setEndDate(string $EndDate) Set End date in the format of `YYYY-MM-DD`
 * @method integer getLimit() Obtain Common parameter. It must be used with `Offset`.
 * @method void setLimit(integer $Limit) Set Common parameter. It must be used with `Offset`.
 * @method integer getOffset() Obtain Common parameter. It must be used with `Limit`. Maximum value of `Limit`: `100`.
 * @method void setOffset(integer $Offset) Set Common parameter. It must be used with `Limit`. Maximum value of `Limit`: `100`.
 * @method string getEmailAddress() Obtain You can specify an email address to query.
 * @method void setEmailAddress(string $EmailAddress) Set You can specify an email address to query.
 * @method string getTaskID() Obtain You can specify a task ID to query.
 * @method void setTaskID(string $TaskID) Set You can specify a task ID to query.
 */
class ListBlackEmailAddressRequest extends AbstractModel
{
    /**
     * @var string Start date in the format of `YYYY-MM-DD`
     */
    public $StartDate;

    /**
     * @var string End date in the format of `YYYY-MM-DD`
     */
    public $EndDate;

    /**
     * @var integer Common parameter. It must be used with `Offset`.
     */
    public $Limit;

    /**
     * @var integer Common parameter. It must be used with `Limit`. Maximum value of `Limit`: `100`.
     */
    public $Offset;

    /**
     * @var string You can specify an email address to query.
     */
    public $EmailAddress;

    /**
     * @var string You can specify a task ID to query.
     */
    public $TaskID;

    /**
     * @param string $StartDate Start date in the format of `YYYY-MM-DD`
     * @param string $EndDate End date in the format of `YYYY-MM-DD`
     * @param integer $Limit Common parameter. It must be used with `Offset`.
     * @param integer $Offset Common parameter. It must be used with `Limit`. Maximum value of `Limit`: `100`.
     * @param string $EmailAddress You can specify an email address to query.
     * @param string $TaskID You can specify a task ID to query.
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }
    }
}
