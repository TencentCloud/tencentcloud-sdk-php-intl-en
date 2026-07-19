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
 * Mini game detail information.
 *
 * @method string getMNPType() Obtain <p>Mini game category.</p>
 * @method void setMNPType(string $MNPType) Set <p>Mini game category.</p>
 * @method string getMNPId() Obtain <p>Mini game appid.</p>
 * @method void setMNPId(string $MNPId) Set <p>Mini game appid.</p>
 * @method string getMNPName() Obtain <p>Mini game name.</p>
 * @method void setMNPName(string $MNPName) Set <p>Mini game name.</p>
 * @method string getMNPIcon() Obtain <p>Mini game icon.</p>
 * @method void setMNPIcon(string $MNPIcon) Set <p>Mini game icon.</p>
 * @method string getMNPIntro() Obtain <p>Mini game introduction.</p>
 * @method void setMNPIntro(string $MNPIntro) Set <p>Mini game introduction.</p>
 * @method string getMNPDesc() Obtain <p>Mini game description.</p>
 * @method void setMNPDesc(string $MNPDesc) Set <p>Mini game description.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getCreateUser() Obtain <p>Creator.</p>
 * @method void setCreateUser(string $CreateUser) Set <p>Creator.</p>
 * @method integer getAccessStatus() Obtain Access status. Valid values: 1: Not connected; 2: Connected. 
 * @method void setAccessStatus(integer $AccessStatus) Set Access status. Valid values: 1: Not connected; 2: Connected. 
 * @method string getTeamName() Obtain <p>Team name.</p>
 * @method void setTeamName(string $TeamName) Set <p>Team name.</p>
 * @method string getTeamId() Obtain <p>Team ID.</p>
 * @method void setTeamId(string $TeamId) Set <p>Team ID.</p>
 * @method integer getStatus() Obtain <p>Mini game available status. Valid values: 1: Available; 2: Not available.</p>
 * @method void setStatus(integer $Status) Set <p>Mini game available status. Valid values: 1: Available; 2: Not available.</p>
 * @method array getI18nList() Obtain <p>Mini game information in multiple languages.</p>
 * @method void setI18nList(array $I18nList) Set <p>Mini game information in multiple languages.</p>
 * @method integer getTeamTypeId() Obtain <p>Team type ID. Valid values: 1: Mini program team; 2: Superapp team; 3: Service provider team.</p>
 * @method void setTeamTypeId(integer $TeamTypeId) Set <p>Team type ID. Valid values: 1: Mini program team; 2: Superapp team; 3: Service provider team.</p>
 * @method array getAgeRatings() Obtain <p>Age rating information.</p>
 * @method void setAgeRatings(array $AgeRatings) Set <p>Age rating information.</p>
 * @method string getMerchantId() Obtain <p>Merchant ID information bound to the team to which this mini program belongs.</p>
 * @method void setMerchantId(string $MerchantId) Set <p>Merchant ID information bound to the team to which this mini program belongs.</p>
 */
class DescribeMNGManagerDetailData extends AbstractModel
{
    /**
     * @var string <p>Mini game category.</p>
     */
    public $MNPType;

    /**
     * @var string <p>Mini game appid.</p>
     */
    public $MNPId;

    /**
     * @var string <p>Mini game name.</p>
     */
    public $MNPName;

    /**
     * @var string <p>Mini game icon.</p>
     */
    public $MNPIcon;

    /**
     * @var string <p>Mini game introduction.</p>
     */
    public $MNPIntro;

    /**
     * @var string <p>Mini game description.</p>
     */
    public $MNPDesc;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Creator.</p>
     */
    public $CreateUser;

    /**
     * @var integer Access status. Valid values: 1: Not connected; 2: Connected. 
     */
    public $AccessStatus;

    /**
     * @var string <p>Team name.</p>
     */
    public $TeamName;

    /**
     * @var string <p>Team ID.</p>
     */
    public $TeamId;

    /**
     * @var integer <p>Mini game available status. Valid values: 1: Available; 2: Not available.</p>
     */
    public $Status;

    /**
     * @var array <p>Mini game information in multiple languages.</p>
     */
    public $I18nList;

    /**
     * @var integer <p>Team type ID. Valid values: 1: Mini program team; 2: Superapp team; 3: Service provider team.</p>
     */
    public $TeamTypeId;

    /**
     * @var array <p>Age rating information.</p>
     */
    public $AgeRatings;

    /**
     * @var string <p>Merchant ID information bound to the team to which this mini program belongs.</p>
     */
    public $MerchantId;

    /**
     * @param string $MNPType <p>Mini game category.</p>
     * @param string $MNPId <p>Mini game appid.</p>
     * @param string $MNPName <p>Mini game name.</p>
     * @param string $MNPIcon <p>Mini game icon.</p>
     * @param string $MNPIntro <p>Mini game introduction.</p>
     * @param string $MNPDesc <p>Mini game description.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $CreateUser <p>Creator.</p>
     * @param integer $AccessStatus Access status. Valid values: 1: Not connected; 2: Connected. 
     * @param string $TeamName <p>Team name.</p>
     * @param string $TeamId <p>Team ID.</p>
     * @param integer $Status <p>Mini game available status. Valid values: 1: Available; 2: Not available.</p>
     * @param array $I18nList <p>Mini game information in multiple languages.</p>
     * @param integer $TeamTypeId <p>Team type ID. Valid values: 1: Mini program team; 2: Superapp team; 3: Service provider team.</p>
     * @param array $AgeRatings <p>Age rating information.</p>
     * @param string $MerchantId <p>Merchant ID information bound to the team to which this mini program belongs.</p>
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

        if (array_key_exists("TeamTypeId",$param) and $param["TeamTypeId"] !== null) {
            $this->TeamTypeId = $param["TeamTypeId"];
        }

        if (array_key_exists("AgeRatings",$param) and $param["AgeRatings"] !== null) {
            $this->AgeRatings = [];
            foreach ($param["AgeRatings"] as $key => $value){
                $obj = new AgeRatingItem();
                $obj->deserialize($value);
                array_push($this->AgeRatings, $obj);
            }
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }
    }
}
