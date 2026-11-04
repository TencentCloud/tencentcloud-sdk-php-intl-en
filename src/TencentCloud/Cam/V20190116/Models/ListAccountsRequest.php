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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAccounts request structure.
 *
 * @method integer getMaxItems() Obtain <p>Number of returned results. If the returned results are truncated after reaching the MaxItems limit, the response parameter IsTruncated will be equal to true.</p><p>Value range: [1, 100]</p>
 * @method void setMaxItems(integer $MaxItems) Set <p>Number of returned results. If the returned results are truncated after reaching the MaxItems limit, the response parameter IsTruncated will be equal to true.</p><p>Value range: [1, 100]</p>
 * @method string getMarker() Obtain <p>When the return result of the request is truncated, you can use Marker to get the content after the current truncation position.</p>
 * @method void setMarker(string $Marker) Set <p>When the return result of the request is truncated, you can use Marker to get the content after the current truncation position.</p>
 * @method string getUserType() Obtain <p>Type of user</p><p>Enumeration values:</p><ul><li>Owner: root account</li><li>SubUser: ordinary sub-user</li><li>CICUser: CIC sub-user</li><li>WechatCorpUser: WeCom sub-user</li><li>AgentIdentity: AgentIdentity sub-user</li><li>Collaborator: collaborator</li><li>MessageReceiver: message recipient</li></ul>
 * @method void setUserType(string $UserType) Set <p>Type of user</p><p>Enumeration values:</p><ul><li>Owner: root account</li><li>SubUser: ordinary sub-user</li><li>CICUser: CIC sub-user</li><li>WechatCorpUser: WeCom sub-user</li><li>AgentIdentity: AgentIdentity sub-user</li><li>Collaborator: collaborator</li><li>MessageReceiver: message recipient</li></ul>
 */
class ListAccountsRequest extends AbstractModel
{
    /**
     * @var integer <p>Number of returned results. If the returned results are truncated after reaching the MaxItems limit, the response parameter IsTruncated will be equal to true.</p><p>Value range: [1, 100]</p>
     */
    public $MaxItems;

    /**
     * @var string <p>When the return result of the request is truncated, you can use Marker to get the content after the current truncation position.</p>
     */
    public $Marker;

    /**
     * @var string <p>Type of user</p><p>Enumeration values:</p><ul><li>Owner: root account</li><li>SubUser: ordinary sub-user</li><li>CICUser: CIC sub-user</li><li>WechatCorpUser: WeCom sub-user</li><li>AgentIdentity: AgentIdentity sub-user</li><li>Collaborator: collaborator</li><li>MessageReceiver: message recipient</li></ul>
     */
    public $UserType;

    /**
     * @param integer $MaxItems <p>Number of returned results. If the returned results are truncated after reaching the MaxItems limit, the response parameter IsTruncated will be equal to true.</p><p>Value range: [1, 100]</p>
     * @param string $Marker <p>When the return result of the request is truncated, you can use Marker to get the content after the current truncation position.</p>
     * @param string $UserType <p>Type of user</p><p>Enumeration values:</p><ul><li>Owner: root account</li><li>SubUser: ordinary sub-user</li><li>CICUser: CIC sub-user</li><li>WechatCorpUser: WeCom sub-user</li><li>AgentIdentity: AgentIdentity sub-user</li><li>Collaborator: collaborator</li><li>MessageReceiver: message recipient</li></ul>
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
        if (array_key_exists("MaxItems",$param) and $param["MaxItems"] !== null) {
            $this->MaxItems = $param["MaxItems"];
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
