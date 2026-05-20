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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GAAP instance details
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getListenerList() Obtain Listener list
 * @method void setListenerList(array $ListenerList) Set Listener list
 * @method string getInstanceName() Obtain Speed up the instance name
 * @method void setInstanceName(string $InstanceName) Set Speed up the instance name
 */
class GAAPInstanceDetail extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array Listener list
     */
    public $ListenerList;

    /**
     * @var string Speed up the instance name
     */
    public $InstanceName;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $ListenerList Listener list
     * @param string $InstanceName Speed up the instance name
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

        if (array_key_exists("ListenerList",$param) and $param["ListenerList"] !== null) {
            $this->ListenerList = [];
            foreach ($param["ListenerList"] as $key => $value){
                $obj = new GAAPListenerDetail();
                $obj->deserialize($value);
                array_push($this->ListenerList, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
