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
 * UploadAttributeLabel request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getFileName() Obtain Filename.
 * @method void setFileName(string $FileName) Set Filename.
 * @method string getCosUrl() Obtain Cos path.
 * @method void setCosUrl(string $CosUrl) Set Cos path.
 * @method string getCosHash() Obtain Verify the consistency of files uploaded to the cloud and local files by validating the crc64 encoding in the x-cos-hash-crc64ecma header.
 * @method void setCosHash(string $CosHash) Set Verify the consistency of files uploaded to the cloud and local files by validating the crc64 encoding in the x-cos-hash-crc64ecma header.
 * @method string getSize() Obtain File size.
 * @method void setSize(string $Size) Set File size.
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).
 */
class UploadAttributeLabelRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Filename.
     */
    public $FileName;

    /**
     * @var string Cos path.
     */
    public $CosUrl;

    /**
     * @var string Verify the consistency of files uploaded to the cloud and local files by validating the crc64 encoding in the x-cos-hash-crc64ecma header.
     */
    public $CosHash;

    /**
     * @var string File size.
     */
    public $Size;

    /**
     * @var string Login to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @param string $BotBizId Application ID.
     * @param string $FileName Filename.
     * @param string $CosUrl Cos path.
     * @param string $CosHash Verify the consistency of files uploaded to the cloud and local files by validating the crc64 encoding in the x-cos-hash-crc64ecma header.
     * @param string $Size File size.
     * @param string $LoginUin Login to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("CosHash",$param) and $param["CosHash"] !== null) {
            $this->CosHash = $param["CosHash"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
