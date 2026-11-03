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
 * Additional parameter for the safe execution action when it is interception.

This parameter is used to specify the extra handling action taken by the system when a security rule is hit and an intercept action is executed.
Different handling actions are configured with different fixed parameter combinations. The system will determine the actually effective handling action type according to the configured parameter combination.
Only one handling action can be configured and made effective during the same block execution. Parameters corresponding to multiple handling actions cannot appear simultaneously, otherwise the configuration is deemed invalid. If empty, the default block handling action is used.
DenyActionParameters supports the following extra handling actions: <li>Default: When DenyActionParameters is empty or no extra handling action is enabled, the system will perform the default block, responding with an interception page.</li><li>IP blocking: Continuously block the client source IP that triggers the rule. Corresponding parameters: BlockIp, BlockIpDuration.</li><li>Custom page interception: Use the specified custom page content to respond to requests. Corresponding parameters: ReturnCustomPage, ResponseCode, ErrorPageId.</li><li>Silence: Accept client requests but do not return. Corresponding parameter: Stall.</li>
 *
 * @method string getBlockIp() Obtain Whether to extend the block on the source IP. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
After enabled, the client IP that triggers the rule will be continuously blocked. When this option is enabled, the BlockIpDuration parameter must be specified simultaneously.
Note: This option cannot intersect with ReturnCustomPage or Stall.
 * @method void setBlockIp(string $BlockIp) Set Whether to extend the block on the source IP. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
After enabled, the client IP that triggers the rule will be continuously blocked. When this option is enabled, the BlockIpDuration parameter must be specified simultaneously.
Note: This option cannot intersect with ReturnCustomPage or Stall.
 * @method string getBlockIpDuration() Obtain IP ban duration when BlockIP is on.
 * @method void setBlockIpDuration(string $BlockIpDuration) Set IP ban duration when BlockIP is on.
 * @method string getReturnCustomPage() Obtain Whether to use custom pages. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Enabled. Use custom page content to intercept (respond to) requests. When this option is enabled, you must specify the ResponseCode and ErrorPageId parameters simultaneously.
Note: This option cannot intersect with BlockIp or Stall.

 * @method void setReturnCustomPage(string $ReturnCustomPage) Set Whether to use custom pages. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Enabled. Use custom page content to intercept (respond to) requests. When this option is enabled, you must specify the ResponseCode and ErrorPageId parameters simultaneously.
Note: This option cannot intersect with BlockIp or Stall.

 * @method string getResponseCode() Obtain Status code of the custom page.
 * @method void setResponseCode(string $ResponseCode) Set Status code of the custom page.
 * @method string getErrorPageId() Obtain PageId of the custom page.
 * @method void setErrorPageId(string $ErrorPageId) Set PageId of the custom page.
 * @method string getStall() Obtain Whether to suspend requests from the request source without processing. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Enabled. It no longer responds to requests in the current connection session and does not actively disconnect. When used for crawler counteraction, it consumes client connection resources.
Note: This option cannot intersect with BlockIp or ReturnCustomPage.
 * @method void setStall(string $Stall) Set Whether to suspend requests from the request source without processing. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Enabled. It no longer responds to requests in the current connection session and does not actively disconnect. When used for crawler counteraction, it consumes client connection resources.
Note: This option cannot intersect with BlockIp or ReturnCustomPage.
 */
class DenyActionParameters extends AbstractModel
{
    /**
     * @var string Whether to extend the block on the source IP. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
After enabled, the client IP that triggers the rule will be continuously blocked. When this option is enabled, the BlockIpDuration parameter must be specified simultaneously.
Note: This option cannot intersect with ReturnCustomPage or Stall.
     */
    public $BlockIp;

    /**
     * @var string IP ban duration when BlockIP is on.
     */
    public $BlockIpDuration;

    /**
     * @var string Whether to use custom pages. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Enabled. Use custom page content to intercept (respond to) requests. When this option is enabled, you must specify the ResponseCode and ErrorPageId parameters simultaneously.
Note: This option cannot intersect with BlockIp or Stall.

     */
    public $ReturnCustomPage;

    /**
     * @var string Status code of the custom page.
     */
    public $ResponseCode;

    /**
     * @var string PageId of the custom page.
     */
    public $ErrorPageId;

    /**
     * @var string Whether to suspend requests from the request source without processing. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Enabled. It no longer responds to requests in the current connection session and does not actively disconnect. When used for crawler counteraction, it consumes client connection resources.
Note: This option cannot intersect with BlockIp or ReturnCustomPage.
     */
    public $Stall;

    /**
     * @param string $BlockIp Whether to extend the block on the source IP. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
After enabled, the client IP that triggers the rule will be continuously blocked. When this option is enabled, the BlockIpDuration parameter must be specified simultaneously.
Note: This option cannot intersect with ReturnCustomPage or Stall.
     * @param string $BlockIpDuration IP ban duration when BlockIP is on.
     * @param string $ReturnCustomPage Whether to use custom pages. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Enabled. Use custom page content to intercept (respond to) requests. When this option is enabled, you must specify the ResponseCode and ErrorPageId parameters simultaneously.
Note: This option cannot intersect with BlockIp or Stall.

     * @param string $ResponseCode Status code of the custom page.
     * @param string $ErrorPageId PageId of the custom page.
     * @param string $Stall Whether to suspend requests from the request source without processing. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Enabled. It no longer responds to requests in the current connection session and does not actively disconnect. When used for crawler counteraction, it consumes client connection resources.
Note: This option cannot intersect with BlockIp or ReturnCustomPage.
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
