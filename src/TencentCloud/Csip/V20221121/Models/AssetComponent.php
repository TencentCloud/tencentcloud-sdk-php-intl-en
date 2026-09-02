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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Component information in an asset
 *
 * @method string getName() Obtain <p>Component name.</p>
 * @method void setName(string $Name) Set <p>Component name.</p>
 * @method string getVersion() Obtain <p>Component version</p>
 * @method void setVersion(string $Version) Set <p>Component version</p>
 * @method string getType() Obtain <p>Component type</p>
 * @method void setType(string $Type) Set <p>Component type</p>
 * @method string getFirstFoundTime() Obtain <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setFirstFoundTime(string $FirstFoundTime) Set <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getLatestFoundTime() Obtain <p>Last discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestFoundTime(string $LatestFoundTime) Set <p>Last discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getId() Obtain <p>Component id</p>
 * @method void setId(string $Id) Set <p>Component id</p>
 * @method string getOwnerAccountName() Obtain <p>Component associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Component associated account name</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the component</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the component</p>
 * @method string getOwnerUin() Obtain <p>Account uin associated with the component</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Account uin associated with the component</p>
 * @method integer getAffectedImageCount() Obtain <p>Numbers of affected images</p>
 * @method void setAffectedImageCount(integer $AffectedImageCount) Set <p>Numbers of affected images</p>
 */
class AssetComponent extends AbstractModel
{
    /**
     * @var string <p>Component name.</p>
     */
    public $Name;

    /**
     * @var string <p>Component version</p>
     */
    public $Version;

    /**
     * @var string <p>Component type</p>
     */
    public $Type;

    /**
     * @var string <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $FirstFoundTime;

    /**
     * @var string <p>Last discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestFoundTime;

    /**
     * @var string <p>Component id</p>
     */
    public $Id;

    /**
     * @var string <p>Component associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>appid of the account associated with the component</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>Account uin associated with the component</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>Numbers of affected images</p>
     */
    public $AffectedImageCount;

    /**
     * @param string $Name <p>Component name.</p>
     * @param string $Version <p>Component version</p>
     * @param string $Type <p>Component type</p>
     * @param string $FirstFoundTime <p>First discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $LatestFoundTime <p>Last discovery time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $Id <p>Component id</p>
     * @param string $OwnerAccountName <p>Component associated account name</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the component</p>
     * @param string $OwnerUin <p>Account uin associated with the component</p>
     * @param integer $AffectedImageCount <p>Numbers of affected images</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FirstFoundTime",$param) and $param["FirstFoundTime"] !== null) {
            $this->FirstFoundTime = $param["FirstFoundTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AffectedImageCount",$param) and $param["AffectedImageCount"] !== null) {
            $this->AffectedImageCount = $param["AffectedImageCount"];
        }
    }
}
