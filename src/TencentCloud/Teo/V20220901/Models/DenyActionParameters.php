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
 * Additional parameter when the executed action is interception.

This parameter is used for specifying the extra handling action taken by the system when a security rule is hit and an intercept action is executed.
Different disposal actions are configured with different fixed parameter combinations. The system will determine the actually effective disposal action type according to the configured parameter combination.
During the same interception execution, only one handling action can be configured and made effective. Parameters for multiple handling actions cannot appear at the same time. Otherwise, it is deemed an invalid configuration. If empty, the default block handling action is used.
DenyActionParameters supports the following additional handling actions: <li>Default: When DenyActionParameters is empty or no additional handling action is enabled, the system will perform the default block, responding with an interception page.</li><li>IP block: Continuously block the client source IP that triggers the rule. Corresponding parameters: BlockIp, BlockIpDuration.</li><li>Custom page interception: Use the designated custom page content to respond to requests. Corresponding parameters: ReturnCustomPage, ResponseCode, ErrorPageId.</li><li>Silence: Accept client requests but do not return. Corresponding parameter: Stall.</li>
 *
 * @method string getBlockIp() Obtain Specifies whether to extend the ban on the source IP. valid values.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

After enabled, continuously blocks client ips that trigger the rule. when this option is enabled, the BlockIpDuration parameter must be simultaneously designated.
Note: this option cannot intersect with ReturnCustomPage or Stall.
 * @method void setBlockIp(string $BlockIp) Set Specifies whether to extend the ban on the source IP. valid values.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

After enabled, continuously blocks client ips that trigger the rule. when this option is enabled, the BlockIpDuration parameter must be simultaneously designated.
Note: this option cannot intersect with ReturnCustomPage or Stall.
 * @method string getBlockIpDuration() Obtain The ban duration when BlockIP is on.
 * @method void setBlockIpDuration(string $BlockIpDuration) Set The ban duration when BlockIP is on.
 * @method string getReturnCustomPage() Obtain Specifies whether to use a custom page. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

Enabled, use custom page content to intercept requests. when this option is enabled, ResponseCode and ErrorPageId parameters must be specified simultaneously.
Note: this option cannot intersect with the BlockIp or Stall option.

 * @method void setReturnCustomPage(string $ReturnCustomPage) Set Specifies whether to use a custom page. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

Enabled, use custom page content to intercept requests. when this option is enabled, ResponseCode and ErrorPageId parameters must be specified simultaneously.
Note: this option cannot intersect with the BlockIp or Stall option.

 * @method string getResponseCode() Obtain Status code of the custom page.
 * @method void setResponseCode(string $ResponseCode) Set Status code of the custom page.
 * @method string getErrorPageId() Obtain Specifies the page id of the custom page.
 * @method void setErrorPageId(string $ErrorPageId) Set Specifies the page id of the custom page.
 * @method string getStall() Obtain Specifies whether to suspend the request source without processing. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

Enabled, no longer responds to requests in the current connection session and does not actively disconnect. used for crawler combat to consume client connection resources.
Note: this option cannot intersect with BlockIp or ReturnCustomPage options.
 * @method void setStall(string $Stall) Set Specifies whether to suspend the request source without processing. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

Enabled, no longer responds to requests in the current connection session and does not actively disconnect. used for crawler combat to consume client connection resources.
Note: this option cannot intersect with BlockIp or ReturnCustomPage options.
 */
class DenyActionParameters extends AbstractModel
{
    /**
     * @var string Specifies whether to extend the ban on the source IP. valid values.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

After enabled, continuously blocks client ips that trigger the rule. when this option is enabled, the BlockIpDuration parameter must be simultaneously designated.
Note: this option cannot intersect with ReturnCustomPage or Stall.
     */
    public $BlockIp;

    /**
     * @var string The ban duration when BlockIP is on.
     */
    public $BlockIpDuration;

    /**
     * @var string Specifies whether to use a custom page. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

Enabled, use custom page content to intercept requests. when this option is enabled, ResponseCode and ErrorPageId parameters must be specified simultaneously.
Note: this option cannot intersect with the BlockIp or Stall option.

     */
    public $ReturnCustomPage;

    /**
     * @var string Status code of the custom page.
     */
    public $ResponseCode;

    /**
     * @var string Specifies the page id of the custom page.
     */
    public $ErrorPageId;

    /**
     * @var string Specifies whether to suspend the request source without processing. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

Enabled, no longer responds to requests in the current connection session and does not actively disconnect. used for crawler combat to consume client connection resources.
Note: this option cannot intersect with BlockIp or ReturnCustomPage options.
     */
    public $Stall;

    /**
     * @param string $BlockIp Specifies whether to extend the ban on the source IP. valid values.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

After enabled, continuously blocks client ips that trigger the rule. when this option is enabled, the BlockIpDuration parameter must be simultaneously designated.
Note: this option cannot intersect with ReturnCustomPage or Stall.
     * @param string $BlockIpDuration The ban duration when BlockIP is on.
     * @param string $ReturnCustomPage Specifies whether to use a custom page. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

Enabled, use custom page content to intercept requests. when this option is enabled, ResponseCode and ErrorPageId parameters must be specified simultaneously.
Note: this option cannot intersect with the BlockIp or Stall option.

     * @param string $ResponseCode Status code of the custom page.
     * @param string $ErrorPageId Specifies the page id of the custom page.
     * @param string $Stall Specifies whether to suspend the request source without processing. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>

Enabled, no longer responds to requests in the current connection session and does not actively disconnect. used for crawler combat to consume client connection resources.
Note: this option cannot intersect with BlockIp or ReturnCustomPage options.
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
        if (array_key_exists("BlockIp",$param) and $param["BlockIp"] !== null) {
            $this->BlockIp = $param["BlockIp"];
        }

        if (array_key_exists("BlockIpDuration",$param) and $param["BlockIpDuration"] !== null) {
            $this->BlockIpDuration = $param["BlockIpDuration"];
        }

        if (array_key_exists("ReturnCustomPage",$param) and $param["ReturnCustomPage"] !== null) {
            $this->ReturnCustomPage = $param["ReturnCustomPage"];
        }

        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }

        if (array_key_exists("ErrorPageId",$param) and $param["ErrorPageId"] !== null) {
            $this->ErrorPageId = $param["ErrorPageId"];
        }

        if (array_key_exists("Stall",$param) and $param["Stall"] !== null) {
            $this->Stall = $param["Stall"];
        }
    }
}
