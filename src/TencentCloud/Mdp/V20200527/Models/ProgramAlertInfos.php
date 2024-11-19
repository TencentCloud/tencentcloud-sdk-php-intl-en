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
 * Channel linear assembly program alarm information details.
 *
 * @method string getChannelId() Obtain Channel ID.
 * @method void setChannelId(string $ChannelId) Set Channel ID.
 * @method string getChannelName() Obtain Channel name.

 * @method void setChannelName(string $ChannelName) Set Channel name.

 * @method string getProgramId() Obtain ProgramID.
 * @method void setProgramId(string $ProgramId) Set ProgramID.
 * @method string getProgramName() Obtain ProgramName.
 * @method void setProgramName(string $ProgramName) Set ProgramName.
 * @method integer getCode() Obtain Alarm event code.
 * @method void setCode(integer $Code) Set Alarm event code.
 * @method string getCategory() Obtain Alarm classification.
 * @method void setCategory(string $Category) Set Alarm classification.
 * @method string getMessage() Obtain Alarm message.
 * @method void setMessage(string $Message) Set Alarm message.
 * @method integer getLastModifiedTime() Obtain Update time.
 * @method void setLastModifiedTime(integer $LastModifiedTime) Set Update time.
 */
class ProgramAlertInfos extends AbstractModel
{
    /**
     * @var string Channel ID.
     */
    public $ChannelId;

    /**
     * @var string Channel name.

     */
    public $ChannelName;

    /**
     * @var string ProgramID.
     */
    public $ProgramId;

    /**
     * @var string ProgramName.
     */
    public $ProgramName;

    /**
     * @var integer Alarm event code.
     */
    public $Code;

    /**
     * @var string Alarm classification.
     */
    public $Category;

    /**
     * @var string Alarm message.
     */
    public $Message;

    /**
     * @var integer Update time.
     */
    public $LastModifiedTime;

    /**
     * @param string $ChannelId Channel ID.
     * @param string $ChannelName Channel name.

     * @param string $ProgramId ProgramID.
     * @param string $ProgramName ProgramName.
     * @param integer $Code Alarm event code.
     * @param string $Category Alarm classification.
     * @param string $Message Alarm message.
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }
    }
}
