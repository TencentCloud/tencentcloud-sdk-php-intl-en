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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReconstructDocumentSSE feature configuration parameters.
 *
 * @method string getTableResultType() Obtain The form in which tables in a Markdown file are returned.
- 0: returned as MD.
- 1: returned as HTML.
The default is 0.
 * @method void setTableResultType(string $TableResultType) Set The form in which tables in a Markdown file are returned.
- 0: returned as MD.
- 1: returned as HTML.
The default is 0.
 * @method string getMarkdownImageResponseType() Obtain The form in which images in a Markdown file are returned.
- 0: returned as URL.
- 1: only return the text content extracted from the image in markdown.
The default value is 0.
 * @method void setMarkdownImageResponseType(string $MarkdownImageResponseType) Set The form in which images in a Markdown file are returned.
- 0: returned as URL.
- 1: only return the text content extracted from the image in markdown.
The default value is 0.
 * @method boolean getReturnPageFormat() Obtain Whether the Markdown file contains page number information.
 * @method void setReturnPageFormat(boolean $ReturnPageFormat) Set Whether the Markdown file contains page number information.
 * @method string getPageFormat() Obtain The custom output page number style. {{p}} is a placeholder for the page number. Enable ReturnPageFormat to take effect. If empty, the default style is: <page_num>page {{p}}</page_num>.
 * @method void setPageFormat(string $PageFormat) Set The custom output page number style. {{p}} is a placeholder for the page number. Enable ReturnPageFormat to take effect. If empty, the default style is: <page_num>page {{p}}</page_num>.
 */
class ReconstructDocumentSSEConfig extends AbstractModel
{
    /**
     * @var string The form in which tables in a Markdown file are returned.
- 0: returned as MD.
- 1: returned as HTML.
The default is 0.
     */
    public $TableResultType;

    /**
     * @var string The form in which images in a Markdown file are returned.
- 0: returned as URL.
- 1: only return the text content extracted from the image in markdown.
The default value is 0.
     */
    public $MarkdownImageResponseType;

    /**
     * @var boolean Whether the Markdown file contains page number information.
     */
    public $ReturnPageFormat;

    /**
     * @var string The custom output page number style. {{p}} is a placeholder for the page number. Enable ReturnPageFormat to take effect. If empty, the default style is: <page_num>page {{p}}</page_num>.
     */
    public $PageFormat;

    /**
     * @param string $TableResultType The form in which tables in a Markdown file are returned.
- 0: returned as MD.
- 1: returned as HTML.
The default is 0.
     * @param string $MarkdownImageResponseType The form in which images in a Markdown file are returned.
- 0: returned as URL.
- 1: only return the text content extracted from the image in markdown.
The default value is 0.
     * @param boolean $ReturnPageFormat Whether the Markdown file contains page number information.
     * @param string $PageFormat The custom output page number style. {{p}} is a placeholder for the page number. Enable ReturnPageFormat to take effect. If empty, the default style is: <page_num>page {{p}}</page_num>.
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
        if (array_key_exists("TableResultType",$param) and $param["TableResultType"] !== null) {
            $this->TableResultType = $param["TableResultType"];
        }

        if (array_key_exists("MarkdownImageResponseType",$param) and $param["MarkdownImageResponseType"] !== null) {
            $this->MarkdownImageResponseType = $param["MarkdownImageResponseType"];
        }

        if (array_key_exists("ReturnPageFormat",$param) and $param["ReturnPageFormat"] !== null) {
            $this->ReturnPageFormat = $param["ReturnPageFormat"];
        }

        if (array_key_exists("PageFormat",$param) and $param["PageFormat"] !== null) {
            $this->PageFormat = $param["PageFormat"];
        }
    }
}
