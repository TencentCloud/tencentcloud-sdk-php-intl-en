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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Report embedding data structure with strong authentication
 *
 * @method integer getId() Obtain Information identifier.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Information identifier.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBIToken() Obtain Token.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBIToken(string $BIToken) Set Token.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedUser() Obtain Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedUser(string $CreatedUser) Set Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedUser() Obtain Updater.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedUser(string $UpdatedUser) Set Updater.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPageId() Obtain Page ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageId(string $PageId) Set Page ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtraParam() Obtain Backup.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraParam(string $ExtraParam) Set Backup.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScope() Obtain Embedding type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScope(string $Scope) Set Embedding type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExpireTime() Obtain Expiration time (in minutes), with a maximum value of 240.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time (in minutes), with a maximum value of 240.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserCorpId() Obtain User enterprise ID (only used for multi-user).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserCorpId(string $UserCorpId) Set User enterprise ID (only used for multi-user).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain User ID (only used for multi-user).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID (only used for multi-user).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTicketNum() Obtain Access count limit (range: 1–99999). Leave empty to disable access restrictions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTicketNum(integer $TicketNum) Set Access count limit (range: 1–99999). Leave empty to disable access restrictions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGlobalParam() Obtain Global parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGlobalParam(string $GlobalParam) Set Global parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIntention() Obtain "embed" indicates page dashboard embedding, and "chatBIEmbed" indicates ChatBI embedding.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntention(string $Intention) Set "embed" indicates page dashboard embedding, and "chatBIEmbed" indicates ChatBI embedding.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTokenType() Obtain 100: no bound user.
200: single token per user.
300: multiple tokens per user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTokenType(integer $TokenType) Set 100: no bound user.
200: single token per user.
300: multiple tokens per user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTokenNum() Obtain Number of tokens.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTokenNum(integer $TokenNum) Set Number of tokens.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSingleUserMultiToken() Obtain Whether it is multiple tokens per user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSingleUserMultiToken(boolean $SingleUserMultiToken) Set Whether it is multiple tokens per user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfigParam() Obtain Embedded display configurations: Currently for ChatBI embedding scenarios; TableFilter represents data table list filtering, SqlView represents SQL view feature.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigParam(string $ConfigParam) Set Embedded display configurations: Currently for ChatBI embedding scenarios; TableFilter represents data table list filtering, SqlView represents SQL view feature.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EmbedTokenInfo extends AbstractModel
{
    /**
     * @var integer Information identifier.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string Token.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BIToken;

    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedUser;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Updater.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedUser;

    /**
     * @var string Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var string Page ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageId;

    /**
     * @var string Backup.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraParam;

    /**
     * @var string Embedding type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Scope;

    /**
     * @var integer Expiration time (in minutes), with a maximum value of 240.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string User enterprise ID (only used for multi-user).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserCorpId;

    /**
     * @var string User ID (only used for multi-user).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var integer Access count limit (range: 1–99999). Leave empty to disable access restrictions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TicketNum;

    /**
     * @var string Global parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GlobalParam;

    /**
     * @var string "embed" indicates page dashboard embedding, and "chatBIEmbed" indicates ChatBI embedding.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Intention;

    /**
     * @var integer 100: no bound user.
200: single token per user.
300: multiple tokens per user.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TokenType;

    /**
     * @var integer Number of tokens.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TokenNum;

    /**
     * @var boolean Whether it is multiple tokens per user.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SingleUserMultiToken;

    /**
     * @var string Embedded display configurations: Currently for ChatBI embedding scenarios; TableFilter represents data table list filtering, SqlView represents SQL view feature.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigParam;

    /**
     * @param integer $Id Information identifier.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BIToken Token.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedUser Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedUser Updater.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PageId Page ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtraParam Backup.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Scope Embedding type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExpireTime Expiration time (in minutes), with a maximum value of 240.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserCorpId User enterprise ID (only used for multi-user).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserId User ID (only used for multi-user).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TicketNum Access count limit (range: 1–99999). Leave empty to disable access restrictions.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GlobalParam Global parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Intention "embed" indicates page dashboard embedding, and "chatBIEmbed" indicates ChatBI embedding.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TokenType 100: no bound user.
200: single token per user.
300: multiple tokens per user.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TokenNum Number of tokens.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SingleUserMultiToken Whether it is multiple tokens per user.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConfigParam Embedded display configurations: Currently for ChatBI embedding scenarios; TableFilter represents data table list filtering, SqlView represents SQL view feature.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BIToken",$param) and $param["BIToken"] !== null) {
            $this->BIToken = $param["BIToken"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("UserCorpId",$param) and $param["UserCorpId"] !== null) {
            $this->UserCorpId = $param["UserCorpId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TicketNum",$param) and $param["TicketNum"] !== null) {
            $this->TicketNum = $param["TicketNum"];
        }

        if (array_key_exists("GlobalParam",$param) and $param["GlobalParam"] !== null) {
            $this->GlobalParam = $param["GlobalParam"];
        }

        if (array_key_exists("Intention",$param) and $param["Intention"] !== null) {
            $this->Intention = $param["Intention"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("TokenNum",$param) and $param["TokenNum"] !== null) {
            $this->TokenNum = $param["TokenNum"];
        }

        if (array_key_exists("SingleUserMultiToken",$param) and $param["SingleUserMultiToken"] !== null) {
            $this->SingleUserMultiToken = $param["SingleUserMultiToken"];
        }

        if (array_key_exists("ConfigParam",$param) and $param["ConfigParam"] !== null) {
            $this->ConfigParam = $param["ConfigParam"];
        }
    }
}
