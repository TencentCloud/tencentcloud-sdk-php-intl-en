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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EdgeKVList request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getNamespace() Obtain Namespace name.
 * @method void setNamespace(string $Namespace) Set Namespace name.
 * @method string getPrefix() Obtain Prefix filtering for key names. Only return key names that begin with the specified prefix, with a length of 1-512 characters. Not specified means return all key names; does not allow input of empty string.
 * @method void setPrefix(string $Prefix) Set Prefix filtering for key names. Only return key names that begin with the specified prefix, with a length of 1-512 characters. Not specified means return all key names; does not allow input of empty string.
 * @method string getCursor() Obtain Cursor position. Indicates the starting position of the current query for traversing large amounts of data. Do not fill in during the initial query, start traversal from the beginning. Fill in the Cursor value returned last time during follow-up queries to proceed with traversal from that position.

 * @method void setCursor(string $Cursor) Set Cursor position. Indicates the starting position of the current query for traversing large amounts of data. Do not fill in during the initial query, start traversal from the beginning. Fill in the Cursor value returned last time during follow-up queries to proceed with traversal from that position.

 * @method integer getLimit() Obtain Number of key names returned. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of key names returned. Default value: 20. Maximum value: 1000.
 */
class EdgeKVListRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Namespace name.
     */
    public $Namespace;

    /**
     * @var string Prefix filtering for key names. Only return key names that begin with the specified prefix, with a length of 1-512 characters. Not specified means return all key names; does not allow input of empty string.
     */
    public $Prefix;

    /**
     * @var string Cursor position. Indicates the starting position of the current query for traversing large amounts of data. Do not fill in during the initial query, start traversal from the beginning. Fill in the Cursor value returned last time during follow-up queries to proceed with traversal from that position.

     */
    public $Cursor;

    /**
     * @var integer Number of key names returned. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $Namespace Namespace name.
     * @param string $Prefix Prefix filtering for key names. Only return key names that begin with the specified prefix, with a length of 1-512 characters. Not specified means return all key names; does not allow input of empty string.
     * @param string $Cursor Cursor position. Indicates the starting position of the current query for traversing large amounts of data. Do not fill in during the initial query, start traversal from the beginning. Fill in the Cursor value returned last time during follow-up queries to proceed with traversal from that position.

     * @param integer $Limit Number of key names returned. Default value: 20. Maximum value: 1000.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
