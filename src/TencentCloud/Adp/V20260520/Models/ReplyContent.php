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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the reply content
 *
 * @method string getType() Obtain <p>Message content type<br>text: text<br>image: image<br>file: file<br>option_cards: tab<br>custom_params: user-customized business parameter<br>sandbox: cloud desktop<br>custom_variables: custom input parameter<br>web_search: web search content<br>file_collection: file collection info<br>widget: widget info<br>widget_action: client-side widget action information</p>
 * @method void setType(string $Type) Set <p>Message content type<br>text: text<br>image: image<br>file: file<br>option_cards: tab<br>custom_params: user-customized business parameter<br>sandbox: cloud desktop<br>custom_variables: custom input parameter<br>web_search: web search content<br>file_collection: file collection info<br>widget: widget info<br>widget_action: client-side widget action information</p>
 * @method string getText() Obtain <p>Text content</p>
 * @method void setText(string $Text) Set <p>Text content</p>
 * @method array getOptionCardList() Obtain <p>Tab information</p>
 * @method void setOptionCardList(array $OptionCardList) Set <p>Tab information</p>
 * @method ConversationFileCollection getFileCollection() Obtain <p>File collection info</p>
 * @method void setFileCollection(ConversationFileCollection $FileCollection) Set <p>File collection info</p>
 * @method ConversationWidget getWidget() Obtain <p>Widget information.</p>
 * @method void setWidget(ConversationWidget $Widget) Set <p>Widget information.</p>
 */
class ReplyContent extends AbstractModel
{
    /**
     * @var string <p>Message content type<br>text: text<br>image: image<br>file: file<br>option_cards: tab<br>custom_params: user-customized business parameter<br>sandbox: cloud desktop<br>custom_variables: custom input parameter<br>web_search: web search content<br>file_collection: file collection info<br>widget: widget info<br>widget_action: client-side widget action information</p>
     */
    public $Type;

    /**
     * @var string <p>Text content</p>
     */
    public $Text;

    /**
     * @var array <p>Tab information</p>
     */
    public $OptionCardList;

    /**
     * @var ConversationFileCollection <p>File collection info</p>
     */
    public $FileCollection;

    /**
     * @var ConversationWidget <p>Widget information.</p>
     */
    public $Widget;

    /**
     * @param string $Type <p>Message content type<br>text: text<br>image: image<br>file: file<br>option_cards: tab<br>custom_params: user-customized business parameter<br>sandbox: cloud desktop<br>custom_variables: custom input parameter<br>web_search: web search content<br>file_collection: file collection info<br>widget: widget info<br>widget_action: client-side widget action information</p>
     * @param string $Text <p>Text content</p>
     * @param array $OptionCardList <p>Tab information</p>
     * @param ConversationFileCollection $FileCollection <p>File collection info</p>
     * @param ConversationWidget $Widget <p>Widget information.</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("OptionCardList",$param) and $param["OptionCardList"] !== null) {
            $this->OptionCardList = $param["OptionCardList"];
        }

        if (array_key_exists("FileCollection",$param) and $param["FileCollection"] !== null) {
            $this->FileCollection = new ConversationFileCollection();
            $this->FileCollection->deserialize($param["FileCollection"]);
        }

        if (array_key_exists("Widget",$param) and $param["Widget"] !== null) {
            $this->Widget = new ConversationWidget();
            $this->Widget->deserialize($param["Widget"]);
        }
    }
}
