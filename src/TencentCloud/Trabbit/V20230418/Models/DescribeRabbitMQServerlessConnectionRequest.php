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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessConnection request structure.
 *
 * @method string getInstanceId() Obtain instance ID		
 * @method void setInstanceId(string $InstanceId) Set instance ID		
 * @method string getVirtualHost() Obtain Specifies the vhost name.
 * @method void setVirtualHost(string $VirtualHost) Set Specifies the vhost name.
 * @method string getSortElement() Obtain Sort by which field. Supported values: channel (number of channels), incoming_bytes (inbound traffic volume), outgoing_bytes (outbound traffic volume).
 * @method void setSortElement(string $SortElement) Set Sort by which field. Supported values: channel (number of channels), incoming_bytes (inbound traffic volume), outgoing_bytes (outbound traffic volume).
 * @method string getSortType() Obtain Sorting method: ASC, DESC
 * @method void setSortType(string $SortType) Set Sorting method: ASC, DESC
 * @method integer getOffset() Obtain Pagination parameters, started from which data entry
 * @method void setOffset(integer $Offset) Set Pagination parameters, started from which data entry
 * @method integer getLimit() Obtain Page size.
 * @method void setLimit(integer $Limit) Set Page size.
 * @method string getName() Obtain Connection name fuzzy search
 * @method void setName(string $Name) Set Connection name fuzzy search
 */
class DescribeRabbitMQServerlessConnectionRequest extends AbstractModel
{
    /**
     * @var string instance ID		
     */
    public $InstanceId;

    /**
     * @var string Specifies the vhost name.
     */
    public $VirtualHost;

    /**
     * @var string Sort by which field. Supported values: channel (number of channels), incoming_bytes (inbound traffic volume), outgoing_bytes (outbound traffic volume).
     */
    public $SortElement;

    /**
     * @var string Sorting method: ASC, DESC
     */
    public $SortType;

    /**
     * @var integer Pagination parameters, started from which data entry
     */
    public $Offset;

    /**
     * @var integer Page size.
     */
    public $Limit;

    /**
     * @var string Connection name fuzzy search
     */
    public $Name;

    /**
     * @param string $InstanceId instance ID		
     * @param string $VirtualHost Specifies the vhost name.
     * @param string $SortElement Sort by which field. Supported values: channel (number of channels), incoming_bytes (inbound traffic volume), outgoing_bytes (outbound traffic volume).
     * @param string $SortType Sorting method: ASC, DESC
     * @param integer $Offset Pagination parameters, started from which data entry
     * @param integer $Limit Page size.
     * @param string $Name Connection name fuzzy search
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
