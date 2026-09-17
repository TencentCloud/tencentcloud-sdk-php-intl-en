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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getTaskId() Obtain 
 * @method void setTaskId(string $TaskId) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method integer getErrCode() Obtain 
 * @method void setErrCode(integer $ErrCode) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method integer getSourceDefinition() Obtain 
 * @method void setSourceDefinition(integer $SourceDefinition) Set 
 * @method string getWechatStatus() Obtain 
 * @method void setWechatStatus(string $WechatStatus) Set 
 * @method string getWechatVid() Obtain 
 * @method void setWechatVid(string $WechatVid) Set 
 * @method string getWechatUrl() Obtain 
 * @method void setWechatUrl(string $WechatUrl) Set 
 */
class WechatPublishTask extends AbstractModel
{
    /**
     * @var string 
     */
    public $TaskId;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var integer 
     */
    public $ErrCode;

    /**
     * @var string 
     */
    public $Message;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var integer 
     */
    public $SourceDefinition;

    /**
     * @var string 
     */
    public $WechatStatus;

    /**
     * @var string 
     */
    public $WechatVid;

    /**
     * @var string 
     */
    public $WechatUrl;

    /**
     * @param string $TaskId 
     * @param string $Status 
     * @param integer $ErrCode 
     * @param string $Message 
     * @param string $FileId 
     * @param integer $Definition 
     * @param integer $SourceDefinition 
     * @param string $WechatStatus 
     * @param string $WechatVid 
     * @param string $WechatUrl 
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SourceDefinition",$param) and $param["SourceDefinition"] !== null) {
            $this->SourceDefinition = $param["SourceDefinition"];
        }

        if (array_key_exists("WechatStatus",$param) and $param["WechatStatus"] !== null) {
            $this->WechatStatus = $param["WechatStatus"];
        }

        if (array_key_exists("WechatVid",$param) and $param["WechatVid"] !== null) {
            $this->WechatVid = $param["WechatVid"];
        }

        if (array_key_exists("WechatUrl",$param) and $param["WechatUrl"] !== null) {
            $this->WechatUrl = $param["WechatUrl"];
        }
    }
}
