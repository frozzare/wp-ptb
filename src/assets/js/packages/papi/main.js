// Papi core
import Core from 'papi/core';
import Required from 'papi/required';
import Tabs from 'papi/tabs';

// Properties
import Color from 'papi/properties/color';
import Datetime from 'papi/properties/datetime';
import Dropdown from 'papi/properties/dropdown';
import Editor from 'papi/properties/editor';
import File from 'papi/properties/File';
import Flexible from 'papi/properties/flexible';
import Post from 'papi/properties/post';
import Reference from 'papi/properties/post';
import Relationship from 'papi/properties/relationship';
import Repeater from 'papi/properties/repeater';
import Url from 'papi/properties/url';

/**
 * Initialize all imported classes.
 */

export function init() {
  // Papi core
  Core.init();
  Required.init();
  Tabs.init();

  // Properties
  Color.init();
  Datetime.init();
  Dropdown.init();
  Editor.init();
  File.init();
  Flexible.init();
  Post.init();
  Reference.init();
  Relationship.init();
  Repeater.init();
  Url.init();
}
