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
 * Receiving robot info
 *
 * @method integer getID() Obtain <p>Robot ID</p>
 * @method void setID(integer $ID) Set <p>Robot ID</p>
 * @method string getName() Obtain <p>Bot name<br>Input limit: 1-20 characters in length</p>
 * @method void setName(string $Name) Set <p>Bot name<br>Input limit: 1-20 characters in length</p>
 * @method string getType() Obtain <p>Robot type<br>Enumeration values:<br>WEBHOOK: webhook type<br>SCF: function type</p>
 * @method void setType(string $Type) Set <p>Robot type<br>Enumeration values:<br>WEBHOOK: webhook type<br>SCF: function type</p>
 * @method string getWebhookAddr() Obtain <p>Webhook address, returned only if Type=WEBHOOK; otherwise empty</p>
 * @method void setWebhookAddr(string $WebhookAddr) Set <p>Webhook address, returned only if Type=WEBHOOK; otherwise empty</p>
 * @method string getSCFRegion() Obtain <p>Function region. It is returned only when Type is SCF.</p>
 * @method void setSCFRegion(string $SCFRegion) Set <p>Function region. It is returned only when Type is SCF.</p>
 * @method string getNamespace() Obtain <p>Function namespace, returned only when Type is SCF</p>
 * @method void setNamespace(string $Namespace) Set <p>Function namespace, returned only when Type is SCF</p>
 * @method string getFunctionName() Obtain <p>SCF function name. It is returned only when Type is SCF.</p>
 * @method void setFunctionName(string $FunctionName) Set <p>SCF function name. It is returned only when Type is SCF.</p>
 * @method string getFunctionVersion() Obtain <p>Function version of the cloud function. It is returned only when Type is SCF.</p>
 * @method void setFunctionVersion(string $FunctionVersion) Set <p>Function version of the cloud function. It is returned only when Type is SCF.</p>
 * @method string getAlias() Obtain <p>SCF function alias, returned only when Type is SCF</p>
 * @method void setAlias(string $Alias) Set <p>SCF function alias, returned only when Type is SCF</p>
 */
class WebhookReceiver extends AbstractModel
{
    /**
     * @var integer <p>Robot ID</p>
     */
    public $ID;

    /**
     * @var string <p>Bot name<br>Input limit: 1-20 characters in length</p>
     */
    public $Name;

    /**
     * @var string <p>Robot type<br>Enumeration values:<br>WEBHOOK: webhook type<br>SCF: function type</p>
     */
    public $Type;

    /**
     * @var string <p>Webhook address, returned only if Type=WEBHOOK; otherwise empty</p>
     */
    public $WebhookAddr;

    /**
     * @var string <p>Function region. It is returned only when Type is SCF.</p>
     */
    public $SCFRegion;

    /**
     * @var string <p>Function namespace, returned only when Type is SCF</p>
     */
    public $Namespace;

    /**
     * @var string <p>SCF function name. It is returned only when Type is SCF.</p>
     */
    public $FunctionName;

    /**
     * @var string <p>Function version of the cloud function. It is returned only when Type is SCF.</p>
     */
    public $FunctionVersion;

    /**
     * @var string <p>SCF function alias, returned only when Type is SCF</p>
     */
    public $Alias;

    /**
     * @param integer $ID <p>Robot ID</p>
     * @param string $Name <p>Bot name<br>Input limit: 1-20 characters in length</p>
     * @param string $Type <p>Robot type<br>Enumeration values:<br>WEBHOOK: webhook type<br>SCF: function type</p>
     * @param string $WebhookAddr <p>Webhook address, returned only if Type=WEBHOOK; otherwise empty</p>
     * @param string $SCFRegion <p>Function region. It is returned only when Type is SCF.</p>
     * @param string $Namespace <p>Function namespace, returned only when Type is SCF</p>
     * @param string $FunctionName <p>SCF function name. It is returned only when Type is SCF.</p>
     * @param string $FunctionVersion <p>Function version of the cloud function. It is returned only when Type is SCF.</p>
     * @param string $Alias <p>SCF function alias, returned only when Type is SCF</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WebhookAddr",$param) and $param["WebhookAddr"] !== null) {
            $this->WebhookAddr = $param["WebhookAddr"];
        }

        if (array_key_exists("SCFRegion",$param) and $param["SCFRegion"] !== null) {
            $this->SCFRegion = $param["SCFRegion"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
