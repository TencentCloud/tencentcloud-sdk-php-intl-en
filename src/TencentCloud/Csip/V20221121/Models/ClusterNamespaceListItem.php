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
 * Cluster Namespace item
 *
 * @method integer getAppID() Obtain <p>appid</p>
 * @method void setAppID(integer $AppID) Set <p>appid</p>
 * @method string getName() Obtain <p>Name.</p>
 * @method void setName(string $Name) Set <p>Name.</p>
 * @method array getLabel() Obtain <p>Tag.</p>
 * @method void setLabel(array $Label) Set <p>Tag.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getAssetId() Obtain <p>Asset ID.</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset ID.</p>
 * @method string getUniqueID() Obtain <p>Namespace unique ID</p>
 * @method void setUniqueID(string $UniqueID) Set <p>Namespace unique ID</p>
 */
class ClusterNamespaceListItem extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>Name.</p>
     */
    public $Name;

    /**
     * @var array <p>Tag.</p>
     */
    public $Label;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Asset ID.</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var string <p>Namespace unique ID</p>
     */
    public $UniqueID;

    /**
     * @param integer $AppID <p>appid</p>
     * @param string $Name <p>Name.</p>
     * @param array $Label <p>Tag.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $AssetId <p>Asset ID.</p>
     * @param string $UniqueID <p>Namespace unique ID</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = [];
            foreach ($param["Label"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Label, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("UniqueID",$param) and $param["UniqueID"] !== null) {
            $this->UniqueID = $param["UniqueID"];
        }
    }
}
