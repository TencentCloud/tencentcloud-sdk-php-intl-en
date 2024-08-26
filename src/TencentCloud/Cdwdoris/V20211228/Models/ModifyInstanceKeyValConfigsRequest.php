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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceKeyValConfigs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getFileName() Obtain File name
 * @method void setFileName(string $FileName) Set File name
 * @method array getAddItems() Obtain Add configuration list
 * @method void setAddItems(array $AddItems) Set Add configuration list
 * @method array getUpdateItems() Obtain Update configuration list
 * @method void setUpdateItems(array $UpdateItems) Set Update configuration list
 * @method array getDelItems() Obtain Delete configuration list
 * @method void setDelItems(array $DelItems) Set Delete configuration list
 * @method string getMessage() Obtain Remarks (within 50 words)
 * @method void setMessage(string $Message) Set Remarks (within 50 words)
 * @method array getHotUpdateItems() Obtain Hot update list
 * @method void setHotUpdateItems(array $HotUpdateItems) Set Hot update list
 * @method InstanceConfigItem getDeleteItems() Obtain Delete configuration list
 * @method void setDeleteItems(InstanceConfigItem $DeleteItems) Set Delete configuration list
 * @method string getIPAddress() Obtain IP address
 * @method void setIPAddress(string $IPAddress) Set IP address
 */
class ModifyInstanceKeyValConfigsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string File name
     */
    public $FileName;

    /**
     * @var array Add configuration list
     */
    public $AddItems;

    /**
     * @var array Update configuration list
     */
    public $UpdateItems;

    /**
     * @var array Delete configuration list
     */
    public $DelItems;

    /**
     * @var string Remarks (within 50 words)
     */
    public $Message;

    /**
     * @var array Hot update list
     */
    public $HotUpdateItems;

    /**
     * @var InstanceConfigItem Delete configuration list
     */
    public $DeleteItems;

    /**
     * @var string IP address
     */
    public $IPAddress;

    /**
     * @param string $InstanceId Instance ID
     * @param string $FileName File name
     * @param array $AddItems Add configuration list
     * @param array $UpdateItems Update configuration list
     * @param array $DelItems Delete configuration list
     * @param string $Message Remarks (within 50 words)
     * @param array $HotUpdateItems Hot update list
     * @param InstanceConfigItem $DeleteItems Delete configuration list
     * @param string $IPAddress IP address
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("AddItems",$param) and $param["AddItems"] !== null) {
            $this->AddItems = [];
            foreach ($param["AddItems"] as $key => $value){
                $obj = new InstanceConfigItem();
                $obj->deserialize($value);
                array_push($this->AddItems, $obj);
            }
        }

        if (array_key_exists("UpdateItems",$param) and $param["UpdateItems"] !== null) {
            $this->UpdateItems = [];
            foreach ($param["UpdateItems"] as $key => $value){
                $obj = new InstanceConfigItem();
                $obj->deserialize($value);
                array_push($this->UpdateItems, $obj);
            }
        }

        if (array_key_exists("DelItems",$param) and $param["DelItems"] !== null) {
            $this->DelItems = [];
            foreach ($param["DelItems"] as $key => $value){
                $obj = new InstanceConfigItem();
                $obj->deserialize($value);
                array_push($this->DelItems, $obj);
            }
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("HotUpdateItems",$param) and $param["HotUpdateItems"] !== null) {
            $this->HotUpdateItems = [];
            foreach ($param["HotUpdateItems"] as $key => $value){
                $obj = new InstanceConfigItem();
                $obj->deserialize($value);
                array_push($this->HotUpdateItems, $obj);
            }
        }

        if (array_key_exists("DeleteItems",$param) and $param["DeleteItems"] !== null) {
            $this->DeleteItems = new InstanceConfigItem();
            $this->DeleteItems->deserialize($param["DeleteItems"]);
        }

        if (array_key_exists("IPAddress",$param) and $param["IPAddress"] !== null) {
            $this->IPAddress = $param["IPAddress"];
        }
    }
}
