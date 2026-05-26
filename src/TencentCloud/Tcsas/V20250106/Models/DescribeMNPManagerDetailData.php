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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mini program details.
 *
 * @method string getMNPType() Obtain Mini program category.
 * @method void setMNPType(string $MNPType) Set Mini program category.
 * @method string getMNPId() Obtain Mini program appid.
 * @method void setMNPId(string $MNPId) Set Mini program appid.
 * @method string getMNPName() Obtain Mini program name.
 * @method void setMNPName(string $MNPName) Set Mini program name.
 * @method string getMNPIcon() Obtain Mini program icon.
 * @method void setMNPIcon(string $MNPIcon) Set Mini program icon.
 * @method string getMNPIntro() Obtain Mini program introduction.
 * @method void setMNPIntro(string $MNPIntro) Set Mini program introduction.
 * @method string getMNPDesc() Obtain Mini program description.
 * @method void setMNPDesc(string $MNPDesc) Set Mini program description.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getCreateUser() Obtain Creator.
 * @method void setCreateUser(string $CreateUser) Set Creator.
 * @method integer getAccessStatus() Obtain Access status. Valid values: 1: not connected; 2: connected.
 * @method void setAccessStatus(integer $AccessStatus) Set Access status. Valid values: 1: not connected; 2: connected.
 * @method string getTeamName() Obtain Team name.
 * @method void setTeamName(string $TeamName) Set Team name.
 * @method string getTeamId() Obtain Team ID.
 * @method void setTeamId(string $TeamId) Set Team ID.
 * @method integer getStatus() Obtain Mini program available status. Valid values: 1: Available; 2: Removed.
 * @method void setStatus(integer $Status) Set Mini program available status. Valid values: 1: Available; 2: Removed.
 * @method array getI18nList() Obtain The mini program name and description in multiple languages.
 * @method void setI18nList(array $I18nList) Set The mini program name and description in multiple languages.
 */
class DescribeMNPManagerDetailData extends AbstractModel
{
    /**
     * @var string Mini program category.
     */
    public $MNPType;

    /**
     * @var string Mini program appid.
     */
    public $MNPId;

    /**
     * @var string Mini program name.
     */
    public $MNPName;

    /**
     * @var string Mini program icon.
     */
    public $MNPIcon;

    /**
     * @var string Mini program introduction.
     */
    public $MNPIntro;

    /**
     * @var string Mini program description.
     */
    public $MNPDesc;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Creator.
     */
    public $CreateUser;

    /**
     * @var integer Access status. Valid values: 1: not connected; 2: connected.
     */
    public $AccessStatus;

    /**
     * @var string Team name.
     */
    public $TeamName;

    /**
     * @var string Team ID.
     */
    public $TeamId;

    /**
     * @var integer Mini program available status. Valid values: 1: Available; 2: Removed.
     */
    public $Status;

    /**
     * @var array The mini program name and description in multiple languages.
     */
    public $I18nList;

    /**
     * @param string $MNPType Mini program category.
     * @param string $MNPId Mini program appid.
     * @param string $MNPName Mini program name.
     * @param string $MNPIcon Mini program icon.
     * @param string $MNPIntro Mini program introduction.
     * @param string $MNPDesc Mini program description.
     * @param string $CreateTime Creation time.
     * @param string $CreateUser Creator.
     * @param integer $AccessStatus Access status. Valid values: 1: not connected; 2: connected.
     * @param string $TeamName Team name.
     * @param string $TeamId Team ID.
     * @param integer $Status Mini program available status. Valid values: 1: Available; 2: Removed.
     * @param array $I18nList The mini program name and description in multiple languages.
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
        if (array_key_exists("MNPType",$param) and $param["MNPType"] !== null) {
            $this->MNPType = $param["MNPType"];
        }

        if (array_key_exists("MNPId",$param) and $param["MNPId"] !== null) {
            $this->MNPId = $param["MNPId"];
        }

        if (array_key_exists("MNPName",$param) and $param["MNPName"] !== null) {
            $this->MNPName = $param["MNPName"];
        }

        if (array_key_exists("MNPIcon",$param) and $param["MNPIcon"] !== null) {
            $this->MNPIcon = $param["MNPIcon"];
        }

        if (array_key_exists("MNPIntro",$param) and $param["MNPIntro"] !== null) {
            $this->MNPIntro = $param["MNPIntro"];
        }

        if (array_key_exists("MNPDesc",$param) and $param["MNPDesc"] !== null) {
            $this->MNPDesc = $param["MNPDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("AccessStatus",$param) and $param["AccessStatus"] !== null) {
            $this->AccessStatus = $param["AccessStatus"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("I18nList",$param) and $param["I18nList"] !== null) {
            $this->I18nList = [];
            foreach ($param["I18nList"] as $key => $value){
                $obj = new MNPDetailI18nVO();
                $obj->deserialize($value);
                array_push($this->I18nList, $obj);
            }
        }
    }
}
