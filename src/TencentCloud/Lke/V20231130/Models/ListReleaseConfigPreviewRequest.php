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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListReleaseConfigPreview request structure.
 *
 * @method string getBotBizId() Obtain Robot ID.
 * @method void setBotBizId(string $BotBizId) Set Robot ID.
 * @method integer getPageNumber() Obtain Page number.
 * @method void setPageNumber(integer $PageNumber) Set Page number.
 * @method integer getPageSize() Obtain Number of items per page.
 * @method void setPageSize(integer $PageSize) Set Number of items per page.
 * @method string getQuery() Obtain Query content.
 * @method void setQuery(string $Query) Set Query content.
 * @method string getReleaseBizId() Obtain Release ticket ID.
 * @method void setReleaseBizId(string $ReleaseBizId) Set Release ticket ID.
 * @method array getActions() Obtain Status (1: newly-added; 2: updated; 3: deleted).
 * @method void setActions(array $Actions) Set Status (1: newly-added; 2: updated; 3: deleted).
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method array getReleaseStatus() Obtain Release status.
 * @method void setReleaseStatus(array $ReleaseStatus) Set Release status.
 */
class ListReleaseConfigPreviewRequest extends AbstractModel
{
    /**
     * @var string Robot ID.
     */
    public $BotBizId;

    /**
     * @var integer Page number.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page.
     */
    public $PageSize;

    /**
     * @var string Query content.
     */
    public $Query;

    /**
     * @var string Release ticket ID.
     */
    public $ReleaseBizId;

    /**
     * @var array Status (1: newly-added; 2: updated; 3: deleted).
     */
    public $Actions;

    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var array Release status.
     */
    public $ReleaseStatus;

    /**
     * @param string $BotBizId Robot ID.
     * @param integer $PageNumber Page number.
     * @param integer $PageSize Number of items per page.
     * @param string $Query Query content.
     * @param string $ReleaseBizId Release ticket ID.
     * @param array $Actions Status (1: newly-added; 2: updated; 3: deleted).
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param array $ReleaseStatus Release status.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("ReleaseBizId",$param) and $param["ReleaseBizId"] !== null) {
            $this->ReleaseBizId = $param["ReleaseBizId"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }
    }
}
