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
 * Current executed token statistical information.
 *
 * @method string getSessionId() Obtain Session ID.
 * @method void setSessionId(string $SessionId) Set Session ID.
 * @method string getRequestId() Obtain Request ID.
 * @method void setRequestId(string $RequestId) Set Request ID.
 * @method string getRecordId() Obtain It corresponds to a session, session id, used for storing messages for answering. It can be generated in advance, used when saving messages.
 * @method void setRecordId(string $RecordId) Set It corresponds to a session, session id, used for storing messages for answering. It can be generated in advance, used when saving messages.
 * @method integer getUsedCount() Obtain Number of consumed tokens.
 * @method void setUsedCount(integer $UsedCount) Set Number of consumed tokens.
 * @method integer getFreeCount() Obtain Number of free tokens.
 * @method void setFreeCount(integer $FreeCount) Set Number of free tokens.
 * @method integer getOrderCount() Obtain Total number of tokens for orders.
 * @method void setOrderCount(integer $OrderCount) Set Total number of tokens for orders.
 * @method string getStatusSummary() Obtain Current execution status summary. Constant: processing, success., failed.
 * @method void setStatusSummary(string $StatusSummary) Set Current execution status summary. Constant: processing, success., failed.
 * @method string getStatusSummaryTitle() Obtain Chinese display after summarizing the current execution status.
 * @method void setStatusSummaryTitle(string $StatusSummaryTitle) Set Chinese display after summarizing the current execution status.
 * @method integer getElapsed() Obtain Current request execution time, in milliseconds.
 * @method void setElapsed(integer $Elapsed) Set Current request execution time, in milliseconds.
 * @method integer getTokenCount() Obtain Number of tokens consumed by the current request.
 * @method void setTokenCount(integer $TokenCount) Set Number of tokens consumed by the current request.
 * @method array getProcedures() Obtain Execution information.
 * @method void setProcedures(array $Procedures) Set Execution information.
 * @method string getTraceId() Obtain Execution process information TraceId.
 * @method void setTraceId(string $TraceId) Set Execution process information TraceId.
 */
class TokenStat extends AbstractModel
{
    /**
     * @var string Session ID.
     */
    public $SessionId;

    /**
     * @var string Request ID.
     */
    public $RequestId;

    /**
     * @var string It corresponds to a session, session id, used for storing messages for answering. It can be generated in advance, used when saving messages.
     */
    public $RecordId;

    /**
     * @var integer Number of consumed tokens.
     */
    public $UsedCount;

    /**
     * @var integer Number of free tokens.
     */
    public $FreeCount;

    /**
     * @var integer Total number of tokens for orders.
     */
    public $OrderCount;

    /**
     * @var string Current execution status summary. Constant: processing, success., failed.
     */
    public $StatusSummary;

    /**
     * @var string Chinese display after summarizing the current execution status.
     */
    public $StatusSummaryTitle;

    /**
     * @var integer Current request execution time, in milliseconds.
     */
    public $Elapsed;

    /**
     * @var integer Number of tokens consumed by the current request.
     */
    public $TokenCount;

    /**
     * @var array Execution information.
     */
    public $Procedures;

    /**
     * @var string Execution process information TraceId.
     */
    public $TraceId;

    /**
     * @param string $SessionId Session ID.
     * @param string $RequestId Request ID.
     * @param string $RecordId It corresponds to a session, session id, used for storing messages for answering. It can be generated in advance, used when saving messages.
     * @param integer $UsedCount Number of consumed tokens.
     * @param integer $FreeCount Number of free tokens.
     * @param integer $OrderCount Total number of tokens for orders.
     * @param string $StatusSummary Current execution status summary. Constant: processing, success., failed.
     * @param string $StatusSummaryTitle Chinese display after summarizing the current execution status.
     * @param integer $Elapsed Current request execution time, in milliseconds.
     * @param integer $TokenCount Number of tokens consumed by the current request.
     * @param array $Procedures Execution information.
     * @param string $TraceId Execution process information TraceId.
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("UsedCount",$param) and $param["UsedCount"] !== null) {
            $this->UsedCount = $param["UsedCount"];
        }

        if (array_key_exists("FreeCount",$param) and $param["FreeCount"] !== null) {
            $this->FreeCount = $param["FreeCount"];
        }

        if (array_key_exists("OrderCount",$param) and $param["OrderCount"] !== null) {
            $this->OrderCount = $param["OrderCount"];
        }

        if (array_key_exists("StatusSummary",$param) and $param["StatusSummary"] !== null) {
            $this->StatusSummary = $param["StatusSummary"];
        }

        if (array_key_exists("StatusSummaryTitle",$param) and $param["StatusSummaryTitle"] !== null) {
            $this->StatusSummaryTitle = $param["StatusSummaryTitle"];
        }

        if (array_key_exists("Elapsed",$param) and $param["Elapsed"] !== null) {
            $this->Elapsed = $param["Elapsed"];
        }

        if (array_key_exists("TokenCount",$param) and $param["TokenCount"] !== null) {
            $this->TokenCount = $param["TokenCount"];
        }

        if (array_key_exists("Procedures",$param) and $param["Procedures"] !== null) {
            $this->Procedures = [];
            foreach ($param["Procedures"] as $key => $value){
                $obj = new Procedure();
                $obj->deserialize($value);
                array_push($this->Procedures, $obj);
            }
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }
    }
}
