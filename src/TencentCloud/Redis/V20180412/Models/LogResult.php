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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * log result
 *
 * @method integer getDBId() Obtain <p>Database ID</p>
 * @method void setDBId(integer $DBId) Set <p>Database ID</p>
 * @method integer getCommandLatency() Obtain <p>Command delay (ms)</p>
 * @method void setCommandLatency(integer $CommandLatency) Set <p>Command delay (ms)</p>
 * @method string getTimestamp() Obtain <p>Creation time (Format: 2006-01-02 15:04:05.000)</p>
 * @method void setTimestamp(string $Timestamp) Set <p>Creation time (Format: 2006-01-02 15:04:05.000)</p>
 * @method string getClientAddr() Obtain <p>client address</p>
 * @method void setClientAddr(string $ClientAddr) Set <p>client address</p>
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getCommandType() Obtain <p>Command type</p>
 * @method void setCommandType(string $CommandType) Set <p>Command type</p>
 * @method string getCacheCode() Obtain <p>Cache code, backend redis node</p>
 * @method void setCacheCode(string $CacheCode) Set <p>Cache code, backend redis node</p>
 * @method string getCommandDetail() Obtain <p>Command details</p>
 * @method void setCommandDetail(string $CommandDetail) Set <p>Command details</p>
 * @method string getErrMsg() Obtain <p>Error information</p>
 * @method void setErrMsg(string $ErrMsg) Set <p>Error information</p>
 */
class LogResult extends AbstractModel
{
    /**
     * @var integer <p>Database ID</p>
     */
    public $DBId;

    /**
     * @var integer <p>Command delay (ms)</p>
     */
    public $CommandLatency;

    /**
     * @var string <p>Creation time (Format: 2006-01-02 15:04:05.000)</p>
     */
    public $Timestamp;

    /**
     * @var string <p>client address</p>
     */
    public $ClientAddr;

    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>Command type</p>
     */
    public $CommandType;

    /**
     * @var string <p>Cache code, backend redis node</p>
     */
    public $CacheCode;

    /**
     * @var string <p>Command details</p>
     */
    public $CommandDetail;

    /**
     * @var string <p>Error information</p>
     */
    public $ErrMsg;

    /**
     * @param integer $DBId <p>Database ID</p>
     * @param integer $CommandLatency <p>Command delay (ms)</p>
     * @param string $Timestamp <p>Creation time (Format: 2006-01-02 15:04:05.000)</p>
     * @param string $ClientAddr <p>client address</p>
     * @param string $UserName <p>Username.</p>
     * @param string $CommandType <p>Command type</p>
     * @param string $CacheCode <p>Cache code, backend redis node</p>
     * @param string $CommandDetail <p>Command details</p>
     * @param string $ErrMsg <p>Error information</p>
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
        if (array_key_exists("DBId",$param) and $param["DBId"] !== null) {
            $this->DBId = $param["DBId"];
        }

        if (array_key_exists("CommandLatency",$param) and $param["CommandLatency"] !== null) {
            $this->CommandLatency = $param["CommandLatency"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
        }

        if (array_key_exists("CacheCode",$param) and $param["CacheCode"] !== null) {
            $this->CacheCode = $param["CacheCode"];
        }

        if (array_key_exists("CommandDetail",$param) and $param["CommandDetail"] !== null) {
            $this->CommandDetail = $param["CommandDetail"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
