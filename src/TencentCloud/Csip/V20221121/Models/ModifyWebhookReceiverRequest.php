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
 * ModifyWebhookReceiver request structure.
 *
 * @method string getName() Obtain <p>Bot name<br>Input limits: 1-20 characters in length, tenant-unique</p>
 * @method void setName(string $Name) Set <p>Bot name<br>Input limits: 1-20 characters in length, tenant-unique</p>
 * @method string getType() Obtain <p>Robot type<br>Enumeration values:<br>WEBHOOK: webhook type<br>SCF: function type</p>
 * @method void setType(string $Type) Set <p>Robot type<br>Enumeration values:<br>WEBHOOK: webhook type<br>SCF: function type</p>
 * @method integer getID() Obtain <p>Robot ID. More than 0 means modifying existing records; equal to 0 or not passed means adding new<br>Default value: 0</p>
 * @method void setID(integer $ID) Set <p>Robot ID. More than 0 means modifying existing records; equal to 0 or not passed means adding new<br>Default value: 0</p>
 * @method string getWebhookAddr() Obtain <p>Webhook address<br>Input parameter limit: required when Type=WEBHOOK, length 1-2048, must be a valid http(s) URL, and intranet addresses are not allowed</p>
 * @method void setWebhookAddr(string $WebhookAddr) Set <p>Webhook address<br>Input parameter limit: required when Type=WEBHOOK, length 1-2048, must be a valid http(s) URL, and intranet addresses are not allowed</p>
 * @method string getSCFRegion() Obtain <p>Function region, for example, ap-guangzhou<br>Input limit: required when Type is SCF</p>
 * @method void setSCFRegion(string $SCFRegion) Set <p>Function region, for example, ap-guangzhou<br>Input limit: required when Type is SCF</p>
 * @method string getNamespace() Obtain <p>Function namespace<br>Input parameter limit: required when Type=SCF<br>Value for reference: obtain through the DescribeSCFNamespaceList API</p>
 * @method void setNamespace(string $Namespace) Set <p>Function namespace<br>Input parameter limit: required when Type=SCF<br>Value for reference: obtain through the DescribeSCFNamespaceList API</p>
 * @method string getFunctionName() Obtain <p>SCF function name<br>Input parameter limit: required when Type=SCF<br>Parameter value reference: obtain through the DescribeSCFFunctionList API</p>
 * @method void setFunctionName(string $FunctionName) Set <p>SCF function name<br>Input parameter limit: required when Type=SCF<br>Parameter value reference: obtain through the DescribeSCFFunctionList API</p>
 * @method string getFunctionVersion() Obtain <p>Function version<br>Input parameter limit: required when Type is SCF, for example $LATEST<br>Parameter value for reference: obtain through the DescribeSCFFunctionVersionList API</p>
 * @method void setFunctionVersion(string $FunctionVersion) Set <p>Function version<br>Input parameter limit: required when Type is SCF, for example $LATEST<br>Parameter value for reference: obtain through the DescribeSCFFunctionVersionList API</p>
 * @method string getAlias() Obtain <p>Function alias<br>Input parameter limit: required when Type=SCF, for example, $DEFAULT<br>Parameter value for reference: obtain through the DescribeSCFAliasList API</p>
 * @method void setAlias(string $Alias) Set <p>Function alias<br>Input parameter limit: required when Type=SCF, for example, $DEFAULT<br>Parameter value for reference: obtain through the DescribeSCFAliasList API</p>
 */
class ModifyWebhookReceiverRequest extends AbstractModel
{
    /**
     * @var string <p>Bot name<br>Input limits: 1-20 characters in length, tenant-unique</p>
     */
    public $Name;

    /**
     * @var string <p>Robot type<br>Enumeration values:<br>WEBHOOK: webhook type<br>SCF: function type</p>
     */
    public $Type;

    /**
     * @var integer <p>Robot ID. More than 0 means modifying existing records; equal to 0 or not passed means adding new<br>Default value: 0</p>
     */
    public $ID;

    /**
     * @var string <p>Webhook address<br>Input parameter limit: required when Type=WEBHOOK, length 1-2048, must be a valid http(s) URL, and intranet addresses are not allowed</p>
     */
    public $WebhookAddr;

    /**
     * @var string <p>Function region, for example, ap-guangzhou<br>Input limit: required when Type is SCF</p>
     */
    public $SCFRegion;

    /**
     * @var string <p>Function namespace<br>Input parameter limit: required when Type=SCF<br>Value for reference: obtain through the DescribeSCFNamespaceList API</p>
     */
    public $Namespace;

    /**
     * @var string <p>SCF function name<br>Input parameter limit: required when Type=SCF<br>Parameter value reference: obtain through the DescribeSCFFunctionList API</p>
     */
    public $FunctionName;

    /**
     * @var string <p>Function version<br>Input parameter limit: required when Type is SCF, for example $LATEST<br>Parameter value for reference: obtain through the DescribeSCFFunctionVersionList API</p>
     */
    public $FunctionVersion;

    /**
     * @var string <p>Function alias<br>Input parameter limit: required when Type=SCF, for example, $DEFAULT<br>Parameter value for reference: obtain through the DescribeSCFAliasList API</p>
     */
    public $Alias;

    /**
     * @param string $Name <p>Bot name<br>Input limits: 1-20 characters in length, tenant-unique</p>
     * @param string $Type <p>Robot type<br>Enumeration values:<br>WEBHOOK: webhook type<br>SCF: function type</p>
     * @param integer $ID <p>Robot ID. More than 0 means modifying existing records; equal to 0 or not passed means adding new<br>Default value: 0</p>
     * @param string $WebhookAddr <p>Webhook address<br>Input parameter limit: required when Type=WEBHOOK, length 1-2048, must be a valid http(s) URL, and intranet addresses are not allowed</p>
     * @param string $SCFRegion <p>Function region, for example, ap-guangzhou<br>Input limit: required when Type is SCF</p>
     * @param string $Namespace <p>Function namespace<br>Input parameter limit: required when Type=SCF<br>Value for reference: obtain through the DescribeSCFNamespaceList API</p>
     * @param string $FunctionName <p>SCF function name<br>Input parameter limit: required when Type=SCF<br>Parameter value reference: obtain through the DescribeSCFFunctionList API</p>
     * @param string $FunctionVersion <p>Function version<br>Input parameter limit: required when Type is SCF, for example $LATEST<br>Parameter value for reference: obtain through the DescribeSCFFunctionVersionList API</p>
     * @param string $Alias <p>Function alias<br>Input parameter limit: required when Type=SCF, for example, $DEFAULT<br>Parameter value for reference: obtain through the DescribeSCFAliasList API</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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
