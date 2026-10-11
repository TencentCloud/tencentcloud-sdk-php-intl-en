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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of protected directories
 *
 * @method string getDirName() Obtain Website name
 * @method void setDirName(string $DirName) Set Website name
 * @method string getDirPath() Obtain Website protection directory address
 * @method void setDirPath(string $DirPath) Set Website protection directory address
 * @method integer getRelatedServerNum() Obtain Number of associated servers
 * @method void setRelatedServerNum(integer $RelatedServerNum) Set Number of associated servers
 * @method integer getProtectServerNum() Obtain Number of protected servers
 * @method void setProtectServerNum(integer $ProtectServerNum) Set Number of protected servers
 * @method integer getNoProtectServerNum() Obtain Number of unprotected servers
 * @method void setNoProtectServerNum(integer $NoProtectServerNum) Set Number of unprotected servers
 * @method string getId() Obtain Unique ID
 * @method void setId(string $Id) Set Unique ID
 * @method integer getProtectStatus() Obtain Protection status
 * @method void setProtectStatus(integer $ProtectStatus) Set Protection status
 * @method integer getProtectException() Obtain Protection exception
 * @method void setProtectException(integer $ProtectException) Set Protection exception
 * @method integer getAutoRestoreSwitchStatus() Obtain Auto recovery switch (returned when filtering Quuid by Filters). Default value: 0
 * @method void setAutoRestoreSwitchStatus(integer $AutoRestoreSwitchStatus) Set Auto recovery switch (returned when filtering Quuid by Filters). Default value: 0
 * @method string getFirstProtectTime() Obtain First activation time of protection
 * @method void setFirstProtectTime(string $FirstProtectTime) Set First activation time of protection
 * @method string getLatestProtectTime() Obtain Latest activation time of protection
 * @method void setLatestProtectTime(string $LatestProtectTime) Set Latest activation time of protection
 * @method string getProtectFileType() Obtain Protected file types
 * @method void setProtectFileType(string $ProtectFileType) Set Protected file types
 * @method integer getProtectFilesCount() Obtain Total number of protected files
 * @method void setProtectFilesCount(integer $ProtectFilesCount) Set Total number of protected files
 */
class ProtectDirInfo extends AbstractModel
{
    /**
     * @var string Website name
     */
    public $DirName;

    /**
     * @var string Website protection directory address
     */
    public $DirPath;

    /**
     * @var integer Number of associated servers
     */
    public $RelatedServerNum;

    /**
     * @var integer Number of protected servers
     */
    public $ProtectServerNum;

    /**
     * @var integer Number of unprotected servers
     */
    public $NoProtectServerNum;

    /**
     * @var string Unique ID
     */
    public $Id;

    /**
     * @var integer Protection status
     */
    public $ProtectStatus;

    /**
     * @var integer Protection exception
     */
    public $ProtectException;

    /**
     * @var integer Auto recovery switch (returned when filtering Quuid by Filters). Default value: 0
     */
    public $AutoRestoreSwitchStatus;

    /**
     * @var string First activation time of protection
     */
    public $FirstProtectTime;

    /**
     * @var string Latest activation time of protection
     */
    public $LatestProtectTime;

    /**
     * @var string Protected file types
     */
    public $ProtectFileType;

    /**
     * @var integer Total number of protected files
     */
    public $ProtectFilesCount;

    /**
     * @param string $DirName Website name
     * @param string $DirPath Website protection directory address
     * @param integer $RelatedServerNum Number of associated servers
     * @param integer $ProtectServerNum Number of protected servers
     * @param integer $NoProtectServerNum Number of unprotected servers
     * @param string $Id Unique ID
     * @param integer $ProtectStatus Protection status
     * @param integer $ProtectException Protection exception
     * @param integer $AutoRestoreSwitchStatus Auto recovery switch (returned when filtering Quuid by Filters). Default value: 0
     * @param string $FirstProtectTime First activation time of protection
     * @param string $LatestProtectTime Latest activation time of protection
     * @param string $ProtectFileType Protected file types
     * @param integer $ProtectFilesCount Total number of protected files
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
        if (array_key_exists("DirName",$param) and $param["DirName"] !== null) {
            $this->DirName = $param["DirName"];
        }

        if (array_key_exists("DirPath",$param) and $param["DirPath"] !== null) {
            $this->DirPath = $param["DirPath"];
        }

        if (array_key_exists("RelatedServerNum",$param) and $param["RelatedServerNum"] !== null) {
            $this->RelatedServerNum = $param["RelatedServerNum"];
        }

        if (array_key_exists("ProtectServerNum",$param) and $param["ProtectServerNum"] !== null) {
            $this->ProtectServerNum = $param["ProtectServerNum"];
        }

        if (array_key_exists("NoProtectServerNum",$param) and $param["NoProtectServerNum"] !== null) {
            $this->NoProtectServerNum = $param["NoProtectServerNum"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("ProtectException",$param) and $param["ProtectException"] !== null) {
            $this->ProtectException = $param["ProtectException"];
        }

        if (array_key_exists("AutoRestoreSwitchStatus",$param) and $param["AutoRestoreSwitchStatus"] !== null) {
            $this->AutoRestoreSwitchStatus = $param["AutoRestoreSwitchStatus"];
        }

        if (array_key_exists("FirstProtectTime",$param) and $param["FirstProtectTime"] !== null) {
            $this->FirstProtectTime = $param["FirstProtectTime"];
        }

        if (array_key_exists("LatestProtectTime",$param) and $param["LatestProtectTime"] !== null) {
            $this->LatestProtectTime = $param["LatestProtectTime"];
        }

        if (array_key_exists("ProtectFileType",$param) and $param["ProtectFileType"] !== null) {
            $this->ProtectFileType = $param["ProtectFileType"];
        }

        if (array_key_exists("ProtectFilesCount",$param) and $param["ProtectFilesCount"] !== null) {
            $this->ProtectFilesCount = $param["ProtectFilesCount"];
        }
    }
}
